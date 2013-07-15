<?php

	session_start();
	$_SESSION["captchatxt"]=rand(1000,9999);	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml1" xml:lang="en">
    <head>
        <title>Registration Portal</title>
        <link rel="shortcut icon" href="../logo.jpg" /> 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="accepting user input" />

        <script type="text/javascript" src="scripts/validation_client.js">
        </script>
<<<<<<< HEAD
        <script type"text/javascript" src= "foodstore.js">
        </script>
=======
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777

        <script type="text/javascript">
		function display()
	
		{document.getElementById("schools").value=='Others'?document.getElementById('otherschool').style.display='inline' : document.getElementById('otherschool').style.display='none';
		}
		
		function first()
		{
			var y=<?php if(isset($_SESSION["errors"])) echo 1; else echo 0; ?>;
			if(y==1)
			next();
		
		}
		<!-- -------------------------------------------------------------------------------------->
		
		function next() 
		{
			var name_1=<?php if(isset($_SESSION["name_error"])) echo 1; else echo 0;?>;
 			if(name_1)
			document.getElementById("errorname").innerHTML = "Error storing name.Please resubmit!";
			
			var dob_1=<?php if(isset($_SESSION["dob_error"])) echo 1; else echo 0;?>;
			if(dob_1)
			document.getElementById("errordob").innerHTML = "Date entered must be dd-mm-yy";
			
			var roll_no_1=<?php if(isset($_SESSION["roll_no_error"])) echo 1; else echo 0;?>;
			if(roll_no_1)
			document.getElementById("errorroll_no").innerHTML = "Error storing PEN. Please resubmit!";
			
			var dept_1=<?php if(isset($_SESSION["dept_error"])) echo 1; else echo 0;?>;
			if(dept_1)
			document.getElementById("errordept").innerHTML = "Error storing designation. Please resubmit!";
			
			var email_id_1=<?php if(isset($_SESSION["email_id_error"])) echo 1; else echo 0;?>;
			if(email_id_1)
			document.getElementById("erroremail_id").innerHTML = "Error storing email id. Please resubmit!";
			
<<<<<<< HEAD
=======
			var clubsall_1=<?php if(isset($_SESSION["clubsall_error"])) echo 1; else echo 0;?>;
			if(clubsall_1)
			document.getElementById("errorclub").innerHTML = "Error occured with the clubs submitted. Please resubmit!";
			
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
			var password_1=<?php if(isset($_SESSION["password_error"])) echo 1; else echo 0;?>;
			if(password_1)
			document.getElementById("errorpw").innerHTML = "Error occured with the password. Please resubmit!";
 		} 
		
		
        </script>
<<<<<<< HEAD
        <link rel="shortcut icon" href="../images/logo.jpg" />
        <link rel="stylesheet" type="text/css" href="scripts/styling.css"/>
        <link rel="stylesheet" type="text/css" href="../profile/profile.css" />
		<link rel="stylesheet" type="text/css" href="../profile/footer.css" />
    </head>
<body onload="first()">

		<header id="header_main">
        <br/>
        <img src="../logo/captcha.php" alt="J TRACKER"/>
        </header>
        <nav id="navigation">
        <ul>
        <li class="home"><p><a rel="Home" href="../homepage.php">Home</a></p></li>
        </ul>
        </nav>
    <div id="big_wrapper">
        
        
        
        <section>

    	<form method="post" id="mainform" action="scripts/store.php" enctype="multipart/form-data">
    
    	
	<div style="float:left; width:50%;">
        <div>Select the one that applies :</div><div>
=======
        <link rel="stylesheet" href="scripts/styling.css"/>
    </head>
<body onload="first()">
<div id="head">
<h1>Registration Portal</h1>
</div>
    <fieldset id="field">
    <form method="post" id="mainform" action="scripts/store.php" enctype="multipart/form-data">
    
    	
        
        <div>Select the on that applies :<div></div>
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
        <select id="schools" name="schools" onchange="display()" ><optgroup label="Your position:">
        <option>IFC Legal Dept. Staff</option>
        <option>Others</option>
        </optgroup></select>
        <input type="text" name="otherschool" placeholder="Specify your position" id="otherschool" style="display:none;"/></div>
    
        <div>Name:</div><div><input type="text" placeholder="Enter your Full Name" name="name" id="name" maxlength="30"/>
        &nbsp;<i id="errorname"></i></div>
<<<<<<< HEAD
        <div>DOB</div><div><input type="text" placeholder="dd-mm-yy" name="dob" id="dob" / >&nbsp;<i id="errordob"></i></div>
=======
        <div>DOB</div><div><input type="text" placeholder="dd/mm/yy" name="dob" id="dob" / >&nbsp;<i id="errordob"></i></div>
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
        <div>Gender</div>
        
        <div><input type="radio" id="male" name="gender" checked="checked"/><label for="male">Male</label>
        <input type="radio" id="female" name="gender"/><label for="female">Female</label></div>
        <input type="hidden" id="gendervalue" name="gendervalue"/>
        
        <div>PEN :</div><div><input type="text" placeholder="Permanent Employee Number" name="roll_no" id="roll_no" maxlength="10"/>
        &nbsp;<i id="errorroll_no"></i></div>
<<<<<<< HEAD
        <div>Designation:</div><div><input type="text" placeholder="Specify your designation" name="dept" id="dept" />
=======
        <div>Designation:</div><div><input type="text" placeholder="Specify your designation" name="dept" id="dept" /></div>
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
        &nbsp;<i id="errordept"></i></div>
        <div>Email Id:</div><div><input type="text" placeholder="Active Email id" name="email_id" id="email_id" />
        &nbsp;<i id="erroremail_id"></i></div>
        
<<<<<<< HEAD
        <div>Office Address:<br/><textarea id="address" name="address"></textarea></div>
        
	</div>
    
        <div>Username:<br/><input type="text" name="username" id="username" onchange="process()" placeholder="Choose your username" />
        &nbsp;<i id="errorusername" ></i></div>
=======
        <div>Club Membership:&nbsp;&nbsp;&nbsp;<i id="errorclub"></i><br/></div>
        <div id="clubs">
        <input type="checkbox" name="clubs" id="delta" value="delta"/>Delta<br/>
        <input type="checkbox" name="clubs" id="spider" value="spider"/>Spider<br/>
        <input type="checkbox" name="clubs" id="robotics" value="robotics"/>RMI<br/>
        <input type="checkbox" name="clubs" id="baha" value="baha"/>BAHA<br/>
        <input type="checkbox" name="clubs" id="dt" value="dt"/>Dance Troop<br/>
        <input type="checkbox" name="clubs" id="ecell" value="ecell"/>E-Cell<br/>
        </div>
        <input type="hidden" name="clubsall" id="clubsall" />
        
        <div>Office Address:<br/><textarea id="address" name="address"></textarea></div>
        
        <div>Username:<br/><input type="text" name="username" id="username" placeholder="Choose your username" />
        &nbsp;<i id="username" ></i></div>
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
        
        <div>Create a password:</div><div><input type="password" placeholder="Enter a Secure Password" id="password" name="password" />
        &nbsp;<i id="errorpw"></i></div>
        <div>Confirm your password:</div><div><input type="password" placeholder="Reenter your Password" id="repassword" name="repassword" />
        &nbsp;<i id="errorrepw"></i></div>
        
        <div>Upload your Account picture:<br/></div>
        <div><input type="file" accept="image/x-png,image/jpeg" name="file_upload" id="file_upload"/>
        <i id="errorfile"></i></div>
        
        </form>
        
        <div id="capt">
        <img src="scripts/captcha.php"/>&nbsp;<i id="errorcaptcha"></i>
        <form method="post" action="captcha.php">
        <br/>Enter the text shown above:<br/>
        <input type="text" placeholder="Enter the Captcha Code" name="captcha" id="captcha"/>
        <input type="hidden" name="captcha_value" id="captcha_value" value="<?php echo $_SESSION["captchatxt"]; ?>"/>
        <input type="hidden" name="captcha_reload" id="captcha_reload" value="<?php if(isset($_SESSION["captcha_reload"])) echo true; else echo false;?>"/>
                
        </form></div>
        
        <div>
        <input type="button" value="Submit" style="color:#484848;" onclick="validate()"/>
        <input type="button" value="Reset" style="color:#484848;" onclick="document.forms[0].reset()"/>
        </div>
        
<<<<<<< HEAD
        </section>
        
        <footer id="footer">
        	<p>Copyrights &copy; Jtracker 2013</p>
            <p>Jtracker stays private</p> 
        </footer>
        </div>
=======
    </fieldset>
>>>>>>> e23252e80bb556846beb0b1095f93862019f9777
  
    </body>
</html>