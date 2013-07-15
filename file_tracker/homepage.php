<?php

ob_start();
session_start();

<<<<<<< HEAD
if(isset($_SESSION["captcha_reload"]))
unset($_SESSION["captcha_reload"]);

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		header("Location: loggedin/loggedin.php");
	}
else{
include "hits/hit_counter.php";
}
=======
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	header("Location: loggedin/loggedin.php");
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
	
ob_end_flush();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
<<<<<<< HEAD
	<link rel="stylesheet" type="text/css" href="profile/profile.css" />
	<link rel="stylesheet" type="text/css" href="profile/footer.css" />
	<link rel="shortcut icon" href="images/logo.jpg" />
=======
	<link rel="shortcut icon" href="logo.jpg" />
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
    <meta charset="utf-8"/>
    <meta name="homepage" description="homepage"/>    
    <title>Welcome to Jtracker</title>
	<link type="text/css" rel="stylesheet" href="styling.css" />
    <script type="text/javascript">
	function first(){
		document.forms[0].username.focus();
		document.getElementById("register").onclick = function(){
			location.href="signup/signup.php";
		}
	}
<<<<<<< HEAD
	var from_login="<?php if(isset($_SESSION["redir"])) echo true;else echo false;?>";
	//window.alert(typeof(from_login));
	if(from_login==true)
=======
	var from_login=<?php if(isset($_SESSION["redir"])) echo true;else echo false;?>;
	if(from_login)
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
	{
		<?php unset($_SESSION["redir"]);?>
		var message=unescape(location.search);
		window.alert(message.substring(message.indexOf("=")+1 ,message.length-1));
	}

	</script>    
</head>
<body onload="first()">

<<<<<<< HEAD
		<header id="header_main">
        <br/>
        <img src="logo/captcha.php" alt="J TRACKER"/>
        </header>
        <nav id="navigation">
        
        </nav>
        <div id="big_wrapper">
        
        
        
        <section>

=======
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
        <form action="signin/signin.php" method="POST"><p>
        Username<br/>
        <input type="text" name="username" /><br/>
        Password<br/>
        <input type="password" name="password"/><br/>
        <input type="Submit" id="submit" value="Sign In" /><br/>
        Not registered yet?    
        </p>
        </form>
        <input type="button" id="register" value="register"/>
<<<<<<< HEAD
        </section>
    
    	<footer id="footer">
        	<p>Copyrights &copy; Jtracker 2013</p>
            <p>Jtracker stays private</p> 
        </footer>
        </div>
=======
    
    
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
</body>
</html>