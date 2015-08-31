<?php

  // Tests:
  include('../time-since.php');
  // ini_set('display_errors', 0);
  // error_reporting(0);

$lastfmUsername = "rolle-";

if(file_exists('/home/dudeo1/rolle.wtf/inc/lastfm')) :
  $lastfmCache = '/home/dudeo1/rolle.wtf/inc/lastfm/lastfm.recent.cache';
else :
  $lastfmCache = $_SERVER['HOME'].'/rolle.wtf/dist/inc/lastfm/lastfm.recent.cache';
endif;

$secondsBeforeUpdate = 180;
$numberOfSongs = 1;
$socketTimeout = 3;
$emptyCache = '';

  $recentlyPlayedSongs = @file_get_contents("http://ws.audioscrobbler.com/1.0/user/$lastfmUsername/recenttracks.txt");
  $handle = fopen($lastfmCache, "w");
  fwrite($handle, $recentlyPlayedSongs);
  fclose($handle);

$cacheSize = filesize($lastfmCache);
if($cacheSize < 5) echo $emptyCache;
else {
  $recentlyPlayedSongs = file_get_contents($lastfmCache);
  // $recentlyPlayedSongs = utf8_decode($recentlyPlayedSongs); // UTF8 h8

  $track = explode("\n", $recentlyPlayedSongs);
  for ($i = 0; $i < $numberOfSongs; $i++) {
    $trackArray = explode(",", $track[$i]);
    $entry = explode(" – ", $trackArray[1]);
    $artistxml = simplexml_load_file('http://ws.audioscrobbler.com/2.0/?method=artist.getinfo&artist='.urlencode($entry[0]).'&api_key=YOUR_API_KEY&limit=1');

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