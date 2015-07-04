<?php
/**
 * Instagram PHP API
 * Example for using the getUserMedia() method
 * 
 * @link https://github.com/cosenary/Instagram-PHP-API
 * @author Christian Metz
 * @since 4.04.2014
 */

if(file_exists($_SERVER['HOME'].'/rolle.wtf/vendor')) :
	include($_SERVER['HOME'].'/rolle.wtf/vendor/autoload.php');
else :
	include($_SERVER['HOME'].'/rolle.wtf.deploy/vendor/autoload.php');
endif;
use MetzWeb\Instagram\Instagram;
$instagram = new Instagram('YOUR_API_KEY');

// User ID (find your ID: http://otzberg.net/iguserid)
$userID = YOUR_USER_ID;

// Get the most recent public media published by the user
$media = $instagram->getUserMedia($userID, 1);

foreach ($media->data as $data) : ?>

<header class="item-header" style="background-image: url('<?php echo $data->images->low_resolution->url; ?>');">
	<div class="shade"></div>

	<p>Last Instagram photo taken <?php echo aika(abs(strtotime(date('d.m.Y H:i', $data->caption->created_time))), time()+60); ?> ago.</p>

</header>

<?php endforeach; ?>