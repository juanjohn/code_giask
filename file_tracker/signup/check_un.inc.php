<?php

$ip="localhost";
$username="root";
$password="";
$db_name="user_data";
$table_name="user_data";
include "scripts/connect.inc.php";

$query="SELECT `id` FROM `user_data` WHERE `username`=''un''";
?>