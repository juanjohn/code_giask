<?php

session_start();

$id=@$_SESSION['user_id'];

include "../signup/scripts/connect.inc.php";

$query="SELECT `name` FROM `user_data` WHERE `id`='$id'";
$query_run=mysql_query($query);
$_SESSION['name']=mysql_result($query_run,0 );

$user_name=$_SESSION['name'];




?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<link rel="shortcut icon" href="../images/logo.jpg" />
<script type="text/javascript" >
	function create_list(){
		<?php
		include "../signup/scripts/connect.inc.php";
			$query="SELECT `projects_table`.`file_name`,`projects_table`.`user_id`,`user_data`.`user_name`,`user_data`.`id` 
			FROM `user_data`,`projects_table` WHERE `user_data`.`id`=`projects_table`.`user_id` ORDER BY `user_data`.`id`";
			$query_run=mysql_query($query);
			if(mysql_num_rows($query_run)==NULL)
			{
				echo "No files pending !";
			}
			else
			{
				while($query_row=mysql_fetch_assoc($query_run))
				{
					?>file_display("<?php echo $query_row['file_name']?>""<?php echo $query_row['user_name']?>");<?php
				}
			}
		?>
		return ;		
	}
	
</script>
<script type="text/javascript" src="profile.js">
</script>
<link rel="stylesheet" type="text/css" href="../profile/profile.css" />
<link rel="stylesheet" type="text/css" href="../profile/footer.css" />
</head>
<body onload="create_list()">
		<header id="header_main">
        <img src="../logo/captcha.php" alt="J TRACKER"/>
        <p style="float:right;"><?php echo "Welcome to Jtracker ".$user_name."!<br/>"?></p>
        </header>
        <nav id="navigation">
        <ul>
        <li class="home"><p><a rel="Home" href="profile_page.inc.php">Home</a></p></li>
        <li class="logout_li"><p class="logout_nav"><a href="../loggedin/logout.php" id="logout">LOGOUT</a></p></li>
        </ul>
        </nav>
    <div id="big_wrapper">
        
        
        
        <section>
        
        	<div id="section_left">
        	<p>Open a new Project:</p>
        	<form method="post" action="store_project.php" enctype="multipart/form-data">
            <input type="file" name="file_zip" id="file_zip" accept="*"/>
            <input type="submit" value="Open"/>
            </form>
            <div id="file_list" name="file_list" >
            <table id="file_list_ul" style="width:100%;">            
            </table>
            </div>
            </div>
            
            <div id="section_right">
                <p>To forward the file please fill in the necessary details:</p>
                <br/>
                
                <div>
                    <form method="post" action="submit_project.php" enctype="application/x-www-form-urlencoded" >
                    <div>Project waiting approval:
                    <input type="text" disabled="disabled" name="proj_id" id="proj_id" placeholder="Choose the project"/>
                    <input type="hidden" name="proj_name" id="proj_name"/></div>
                    <div><p>Username of the recepient:</p>
                    <input type="text" name="recipient" id="recipient" placeholder="@jtracker.com"/><i id="error_recipient"></i></div>
                    <div><p>Do you approve the project:</p>
                    <input type="checkbox" value="approved" required="required" name="app" id="app"/>
                    <label for="app">Approve</label><i id="error_approve"></i></div>
                    <input type="button" value="Forward Project" onclick="validate_send_file()"/>
                    
                    
                    </form>
                </div>
        
            
            </div>
        
        </section>
        <aside id="aside_left">
        
        
        
        </aside>
        
        <footer id="footer">
        	<p>Copyrights &copy; Jtracker 2013</p>
            <p>Jtracker stays private</p> 
        </footer>
    </div>
</body>
</html>
