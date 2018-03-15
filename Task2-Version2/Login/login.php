<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Gill_Sans_400.font.js" type="text/javascript"></script>
<script src="js/script.js" type="text/javascript"></script>
<script src="js/jquery-3.1.1.min.js"></script>
   
 <style>
    input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	border-radius: 4px;
}
button{
border-radius: 4px;
color:#333333;
}


/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

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
						<li><a href="login.php" class="active">Login</a></li>
						<li><a href="contact-us.html">Contacts</a></li>
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
								<h3>Log<span>in</span></h3>
								<div class="address">
									<h2 style="color:#FFFFFF;">you need to login to access our movie and bookin your chair in it. </h2>
								</div>
							</div>
						</div>
					</div>
				</div>
<div class="inner">
		<form method="GET" action="" >
    

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="UserName" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" required>
        
      <input type="submit" name="submit">
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1" >
      <button type="button" onClick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
<?php
$link=mysql_connect("localhost","root","");
	if($link)
	{
		echo "Connected ";
	}
	else
	{
		echo "Not connected";
		die('Not connected:' . mysql_error());
	}
	$s =mysql_select_db('user',$link);

if(isset($_GET["submit"]))
{
  $UserName = $_GET["UserName"];
  $Password = $_GET["Password"];

    $query = "(select * from signup where UserName='$UserName' and Password='$Password')";
    $r = @mysql_query($query);
    
	
	if (@mysql_num_rows($r) > 0)
	 { 
	 echo "llllllllllllll";
	//header('Location:movies.html');
       echo '<script>window.location="movies.html"</script>';

	 }
    else {
		echo "rrrrrrrrrrrrrrrrrrr".mysql_error();
		//header('location:form.php');
		echo '<script>window.location="form.php"</script>';
	
	}   
}

?>
	
	</div>
	<div class="footer container-fluid" style="margin-top:10% ">
		<p>Copyright CinemaX <span class="fa fa-copyright"> </span>  2017 , All Rights Reserved</p>
	</div>
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
