<?php
ob_start();
session_start();


include "../signup/scripts/connect.inc.php";

$user_name=$_POST["username"];
$password=$_POST["password"];
$hash_password=md5($password);

$query="SELECT `id`,`company` FROM `$table_name` WHERE `user_name`='$user_name' AND `password`='$hash_password'";


if($query_run=mysql_query($query))
{
	$result=mysql_fetch_assoc($query_run);
	
	if(mysql_num_rows($query_run)==NULL)
	{
		$back=true;
		$_SESSION["redir"]=1;
	}
	else
	{
		if($result['company']=="IFC Legal Dept. Staff")
		{
			$_SESSION["user_id"]=$result['id']."IFC";
		}
		else
		{
			$_SESSION["user_id"]=$result['id'];
		}
		header("Location:../loggedin/loggedin.php");
	}
}
else 
die("fatal error");


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD xhtml 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<script type="text/javascript" >
var redir=<?php echo $back;?>;
if(redir)
{
	var msg=escape("msg=Please register to use our services;");
	location.href="../homepage.php?"+msg;
}
</script>
</head>
<body>
</body>
</html>