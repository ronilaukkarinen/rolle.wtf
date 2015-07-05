<iframe src="http://peikko.us/irclog-small.php" frameborder="0"></iframe>
<?php

	// Tests:
	include('time-since.php');
	// ini_set('display_errors', 0);
	// error_reporting(0);

     $lastactive = file_get_contents('http://www.peikko.us/lastactive.log');

        $lastactivetime = "<p>Last active ". aika(abs($lastactive-280), time()) . " ago.</p>";

     echo $lastactivetime;