<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Contact Us - Contact Us | Cinema - Free Website Template from Templates.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/ie_png.js"></script>
	<script type="text/javascript">
		 ie_png.fix('.png, .link1 span, .link1');
	</script>
	<link href="ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->
<style>
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color:#2f6a32;
}
</style>
</head>
<body id="page5">
<div class="tail-top">
	<div class="tail-bottom">
		<div id="main">
<!-- HEADER -->
			<div id="header">
				<div class="row-1">
					<div class="fleft"><a href="index.html">Cinema <span>4U</span></a></div>
					<ul>
						<li><a href="index.html"><img src="images/icon1.gif" alt="" /></a></li>
						<li><a href="contact-us.html"><img src="images/icon2-act.gif" alt="" /></a></li>
						<li><a href="sitemap.html"><img src="images/icon3.gif" alt="" /></a></li>
					</ul>
				</div>
				<div class="row-2">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about-us.html">About</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="contact-us.php" class="active">Contacts</a></li>
						<li class="last"><a href="sitemap.html">Sitemap</a></li>
					</ul>
				</div>
			</div>
<!-- CONTENT -->
			<div id="content">
				<div class="line-hor"></div>
				<div class="box">
					<div class="border-right">
						<div class="border-left">
							<div class="inner">
								<h3>Our <span>Contacts</span></h3>
								<div class="address">
									<div class="fleft"><span>Zip Code:</span>50122<br />
										<span>Country:</span>Egypt<br />
										<span>Telephone:</span>+064 3635600<br />
										<span>Fax:</span>+354 5635610</div>
									<div class="extra-wrap"><span>Miscellaneous info:</span><br />
										However, to explain to you how all this mistaken idea of denouncing pleasure and praising pain a complete account of the system, and expound the actual teachings of the great explorer of the truth and will unfold in the master-builder of human happiness.None of the pleasure because it is pain.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<h3>Contact <span>Form</span></h3>
					<form id="contacts-form" action="" method="POST">
						<fieldset>
						<div class="field"><label>Your Name:</label><input type="text" name="Name" required></div>
						<div class="field"><label>Your E-mail:</label><input type="text" name="Email" required></div>
						<div class="field"><label>Your Website:</label><input type="text" name="Website" required></div>
						<div class="field"><label>Your Message:</label><textarea cols="1" rows="1" name="Message" required></textarea></div>
						<input type="submit" value="Send Your Message" name="submit">
						</fieldset>
					</form>
				</div>
			</div>
			<?php

	$link=mysql_connect("localhost","root","");
	if($link)
	{
		echo "Connected <br>";
	}
	else
	{
		echo "Not connected <br>";
		die('Not connected:' . mysql_error());
	}

$s =mysql_select_db('User',$link);
/*#create table
	$sql="CREATE table contact (Name varchar(20) not null,Email VARCHAR(50) not null,Website varchar(20) null,Message varchar(20) not null)";
	$res= mysql_query($sql ,$link);
	if($res)
	{
		echo"Table hase been created";
	}
	else
	{
		echo"not created". mysql_error();
	}*/
	
if(isset($_POST["submit"]))
{
  $Name = $_POST["Name"];
  $Email= $_POST["Email"];
  $Website = $_POST["Website"];
  $Message = $_POST["Message"]; 
  
  $sql=" insert into contact(Name,Email,Website,Message) VALUES ( '$Name', '$Email', '$Website' ,'$Message')";

	
		if(mysql_query($sql))
		{
		/*echo"inserted";
		echo '<script>window.location="login.php"</script>';*/
		}
		else
		{
		echo"not inserted".mysql_error();
		}
		 
	
}
?> 
<!-- FOOTER -->
			<div id="footer">
				<div class="left1">
					<div class="right1">
						<div class="inside">Copyright CinemaX 2017 @ All Rights Reserved<br />
	 
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
