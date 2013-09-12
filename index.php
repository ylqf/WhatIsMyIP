<?php




$ip = $_REQUEST['ip'];

if (!$ip) {
	$ip = $_SERVER['REMOTE_ADDR'];
}


$url = 'http://freegeoip.net/json/'.$ip;

$result = file_get_contents($url);

$ipinfo = json_decode($result);

if (!$ipinfo)
{
	header( 'Location: /?ip='.$_SERVER['REMOTE_ADDR'] ) ;
}




$title = ' IP or Domain: '.$ip;

require ('ads.php');

require ('header.php');


require ('main.php');

include ('footer.php');

