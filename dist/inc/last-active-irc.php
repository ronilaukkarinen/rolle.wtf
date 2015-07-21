<iframe src="http://peikko.us/irclog-small.php" frameborder="0"></iframe>
<?php

	// Tests:
	include('time-since.php');
	// ini_set('display_errors', 0);
	// error_reporting(0);

     $lastactive = file_get_contents('http://www.peikko.us/lastactive.log');

     	$lastactivetime = aika(abs($lastactive-280), time());

     	if($lastactivetime == "0 minutes") :
     		$lastactivetime = "a moment";
     	endif;

        $lastactivetime = "<p>Last active ". $lastactivetime . " ago.</p>";

     echo $lastactivetime;