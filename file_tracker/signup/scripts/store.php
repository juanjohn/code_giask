<?php
ob_start();
session_start();


include "connect.inc.php";


$name=$_POST["name"];
$dob=$_POST["dob"];
$gender=$_POST["gendervalue"];
$roll_no=$_POST["roll_no"];
$dept=$_POST["dept"];
$email_id=$_POST["email_id"];

<<<<<<< HEAD
=======
$clubsall=$_POST["clubsall"];
$clubsall=substr($clubsall,1);
$clubs=explode("+",$clubsall);
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777

$address=$_POST["address"];
$school=$_POST["otherschool"];
$user_name=$_POST["username"];
$password=$_POST["password"];
$hashpw=md5($password);


<<<<<<< HEAD
$query="INSERT INTO `$db_name`.`$table_name` VALUES ('','$name','$dob','$gender','$roll_no','$dept','$email_id','$address','$school','$user_name','$hashpw')";
=======
$query="INSERT INTO `$db_name`.`$table_name` VALUES ('','$name','$dob','$gender','$roll_no','$dept','$email_id','$clubsall','$address','$school','$user_name','$hashpw')";
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777


$filename=$_FILES["file_upload"]["name"];
$filesize=$_FILES["file_upload"]["size"];
$filetype=$_FILES["file_upload"]["type"];
$filetmpname=$_FILES["file_upload"]["tmp_name"];
$error=$_FILES["file_upload"]["error"];

<<<<<<< HEAD
move_uploaded_file($filetmpname,"../../uploads/".$filename);
=======
move_uploaded_file($filetmpname,"uploads/".$filename);
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777

include_once("validation_server.php");
//ob_flush();


if(isset($_SESSION["errors"]))
{
	$x=1;
}
else
{
	if(mysql_query($query))
	{
		unset($_SESSION["errors"]);
		header("Location: ../../homepage.php");
	}else
	{
		mysql_error("Sorry , We are having some technical difficulties !");
	}
}

ob_end_clean();



?>


<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Connect to database</title>
<script type="text/javascript">
var x=<?php if($x==1) echo true; else echo false;?>;
if(x==true)
{
	<?php $_SESSION["captcha_reload"]=1;?>
	window.history.back();
}
</script>
</head>
<body>


</body>
</html>


