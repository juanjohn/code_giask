<?php
session_start();
ob_start();

include "../signup/scripts/connect.inc.php";
$id=$_SESSION['user_id'];
$user_name=$_POST["recipient"];
$proj_name=$_POST["proj_name"];

$query="SELECT `id` FROM `user_data` WHERE `user_name`='$user_name'";
$query_run=mysql_query($query);
$id_recipient=mysql_result($query_run,0);
echo $proj_name;
$query="UPDATE `projects_table` SET `user_id`='$id_recipient' WHERE `file_name`='$proj_name'";
mysql_query($query);
ob_end_flush();
header("Location: admin_page.php");


?>