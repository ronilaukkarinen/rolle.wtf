<?php

include('../../../vendor/autoload.php');
$dotenv = new Dotenv\Dotenv('../../../');
$dotenv->load();

echo getenv('TWITTER_CONSUMER_KEY');