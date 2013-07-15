<?php
header('Content-Type: text/xml');

echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

require "scripts/connect.inc.php";

echo '<response>';

	$username=$_GET['user_name'];
	$query="SELECT `user_name` FROM `user_data` WHERE `user_name`='$username'";
	$query_run=mysql_query($query);
	$num_rows=mysql_num_rows($query_run);

	
	if($num_rows>=1)
		echo'Sorry the username '.$username.' is already in use!';
	else if($username=='')
		echo "Please enter a username";
	else
		echo"The username ".$username." is available.";

echo '</response>';


?>