<?php

function relativeTime($a) {
    //get current timestampt
    $b = strtotime("now"); 
    //get timestamp when tweet created
    $c = strtotime($a);
    //get difference
    $d = $b - $c;
    //calculate different time values
    $minute = 60;
    $hour = $minute * 60;
    $day = $hour * 24;
    $week = $day * 7;
        
    if(is_numeric($d) && $d > 0) {
        //if less then 3 seconds
        if($d < 3) return "just now";
        //if less then minute
        if($d < $minute) return floor($d) . " seconds";
        //if less then 2 minutes
        if($d < $minute * 2) return " minute";
        //if less then hour
        if($d < $hour) return floor($d / $minute) . " minutes";
        //if less then 2 hours
        if($d < $hour * 2) return "hour";
        //if less then day
        if($d < $day) return floor($d / $hour) . " hours";
        //if more then day, but less then 2 days
        if($d > $day && $d < $day * 2) return "1 day";
        //if less then year
        if($d < $day * 365) return floor($d / $day) . " days";
        //else return more than a year
        return "over an year";
    }
}

require_once 'UntappdPHP.php';

$config = array(
    'clientId'     => 'YOUR_CLIENT_ID',
    'clientSecret' => 'YOUR_CLIENT_SECRET',
    'redirectUri'  => 'YOUR_REDIRECT_URL',
    'accessToken'  => 'YOUR_ACCESS_TOKEN',
);

$untappd = new Pintlabs_Service_Untappd($config);

$feed = $untappd->userFeed($username = 'rolle', '1', '');

    foreach ($feed->response->checkins->items as $i) : ?>

                <header class="item-header" style="background-image: url('<?php

    if(!empty($i->media->items)) :
    
        foreach ($i->media->items as $media) :
            echo $media->photo->photo_img_md;
        endforeach;

    else :
        echo '../images/untappd.jpg';
    endif;

?>');">
                <div class="shade"></div>
        


    <p>Last beer drank <?php echo relativeTime($i->created_at); ?> ago.</p>

<?php endforeach; ?>

                </header>