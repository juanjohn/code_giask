<?php

$client_ip=getenv('HTTP_CLIENT_IP');
$proxy_ip=getenv('HTTP_X_FORWARDED_FOR');
$remote_ip=$_SERVER['REMOTE_ADDR'];

if(!empty($client_ip))
$user_ip=$client_ip;
else if(!empty($proxy_ip))
$user_ip=$proxy_ip;
else
$user_ip=$remote_ip;

include "signup/scripts/connect.inc.php";

function add_ip(){
	global $user_ip;
	$query="INSERT INTO `ip_db` SET `ip_addr`='$user_ip'";
	$query_run=mysql_query($query);
}

function increment_ip(){
	$query="SELECT `no_of_hits` FROM `hit_counter`";
	$query_run=mysql_query($query);
	$no_of_hits=mysql_result($query_run, 0);
	$no_of_hits++;
	
	$query="UPDATE `hit_counter` SET `no_of_hits`='$no_of_hits'";
	mysql_query($query);
}

$query="SELECT `ip_addr` FROM `ip_db` WHERE `ip_addr`='$user_ip'";
if($query_run=mysql_query($query)){
	$num_rows=mysql_num_rows($query_run);
}
	if($num_rows==0)
	{
		add_ip();
		increment_ip();
	}
	else
	{
	}

?>