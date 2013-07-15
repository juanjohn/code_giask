<?php

session_start();
<<<<<<< HEAD

include "../signup/scripts/connect.inc.php";
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
		header("Location: ../profile/profile_page.inc.php");
		
=======
include "../signup/scripts/connect.inc.php";
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
		$username="vfvvvf";
		//$user_id=$_SESSION['user_id'];
		//$username=mysql_result($query_run,0,'username');
		echo "you are logged in! ".$username."<br/>";
		echo "<input type=\"button\" value=\"Logout\" onClick=\"location.href='logout.php'\" />";
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
	}
?>