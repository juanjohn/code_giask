<?php

$ip="localhost";
$username="root";
$password="";
$db_name="user_data";
$table_name="user_data";
	
	if(!@mysql_connect($ip,$username,$password) || !@mysql_select_db($db_name))
	{
		die("Error!Unable to communicate with server.Sorry for the inconvienience");
<<<<<<< HEAD
		
=======
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
		ob_flush();
	}
?>