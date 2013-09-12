<?php

$page = $_REQUEST['action'] ;
$ip = $_REQUEST['ip'];

if (!$ip) {
	$ip = $_SERVER['REMOTE_ADDR'];
}


echo $ip;

if (!$page)
{
	$page = 'main';
}

$title = ucfirst($page).' - IP: '.$ip;
include 'header.php';


include ($page.'.php');

