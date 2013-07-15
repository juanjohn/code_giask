<?php
session_start();

$file = $_FILES["file_zip"];
$file_name= $file["name"];

include "../signup/scripts/connect.inc.php";

$table_name="projects_table";

$id=$_SESSION["user_id"];

$date=date('m/d/Y h:i:s a');
$query="INSERT INTO `$table_name` VALUES ('','$file_name','$id','$date','')";
mysql_query($query);

header("Location: admin_page.php");

?>





