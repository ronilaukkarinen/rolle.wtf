<?php

  // Tests:
  include('../time-since.php');
  // ini_set('display_errors', 0);
  // error_reporting(0);

$lastfmUsername = "rolle-";
$apikey = "xxxxxx";

if(file_exists('/home/dudeo1/rolle.wtf/inc/lastfm')) :
  $lastfmCache = '/home/dudeo1/rolle.wtf/inc/lastfm/lastfm.recent.cache';
else :
  $lastfmCache = "lastfm.recent.cache";
endif;

$secondsBeforeUpdate = 180;
$numberOfSongs = 1;
$socketTimeout = 3;
$emptyCache = '';

  $getrecentlyplayed = simplexml_load_file('http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user='.$lastfmUsername.'&api_key='.$apikey.'');
  $row = '';
  foreach($getrecentlyplayed->recenttracks->track as $recenttrack) {
    $timeplayed = $recenttrack->date['uts'];
    if( empty($timeplayed) ) : 
      $timeplayed = time();
    endif;
    $row .= $timeplayed.",".$recenttrack->artist." - ".$recenttrack->name."\n";
  }

  $recentlyPlayedSongs = $row;
  
  $handle = fopen($lastfmCache, "w");
  fwrite($handle, $recentlyPlayedSongs);
  fclose($handle);

$cacheSize = filesize($lastfmCache);
if($cacheSize < 5) echo $emptyCache;
else {

  $recentlyPlayedSongs = file_get_contents($lastfmCache);

  $track = explode("\n", $recentlyPlayedSongs);

  for ($i = 0; $i < $numberOfSongs; $i++) {

    $trackArray = explode(",", $track[$i]);
    $entry = explode(" - ", $trackArray[1]);

    $artistxml = simplexml_load_file('http://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist='.urlencode($entry[0]).'&api_key='.$apikey.'&limit=1');

    foreach($artistxml->artist->image as $img) {
      if($img['size'] == "mega") { ?>

                <header class="item-header" style="background-image: url('<?php echo $img; ?>');">
                <div class="shade"></div> 

                  <?php $nptime = aika($trackArray[0], time());
                    if(empty($nptime)) :
                      $nptime = " a moment ";
                    elseif($nptime == "0 minutes" || $nptime == " 0 minutes ") :
                      $nptime = " a moment ";
                    else :
                      $nptime = " ".aika($trackArray[0], time())." ";
                    endif;
                  ?>
                  <p>A song played <?php echo $nptime; ?> ago.</p>

                </header>
  <?php
      }
    }
  }
}