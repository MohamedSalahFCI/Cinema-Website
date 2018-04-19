<!DOCTYPE html>
<html>
<title>profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-blue-grey.css">
<link rel='stylesheet' href="css.css">
<link rel="stylesheet" href="font-awesome.min.css">
<link href="style.css" rel="stylesheet" type="text/css" />
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
.dropbtn {
    display: inline-block;
    text-align: center;
    text-decoration: none;
}
.dropdown-content {
    display: none;
    position: absolute;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	width:200px;
	font-size:18px;
}
.dropdown-content a {
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown:hover .dropdown-content {
    display: block;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>
<body  id="page5">
<div class="tail-top">
	<div class="tail-bottom">
		<div id="main">
		<div id="header">
				<div class="row-1">
					<div class="fleft"><a href="index.html" style="color:#CCCCCC;">Cinema <span style="color:#C60000;">4U</span></a></div>
					<ul>
						<li><a  href="#" ><img src="images/icon1.gif" alt="" /></a></li>
						<li><a  href="#" ><img src="images/icon3-act.gif" alt="" /></a></li>
						<div class="w3-dropdown-hover w3-hide-small">
   						 <li><a href="#"><img src="images/icon2-act.gif" alt=""/></a><span class="w3-badge w3-right w3-small w3-green">1</span></li>     
   						 <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:300px">
    						  <a href="profile.php" class="w3-bar-item w3-button">One new message</a>
   						 </div>
 					 </div>
 					 <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
  					  <img src="images/avatar3.png" class="w3-circle" style="height:23px;width:23px" alt="Avatar">
					 </a>	
					</ul>
				</div>
				<div class="row-2">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="about-us.html">About</a></li>
						<li class="dropdown"> <a href="#" class="dropbtn">Login</a>
   							 <div class="dropdown-content">
     							  <a href="login-adimn.php">As Administrator</a>
    						 	 <a href="login.php">As User</a>
   							 </div>
 						 </li>
						<li><a href="contact-us.php" class="active">Contacts</a></li>
						<li class="last"><a href="form.php">Sign Up</a></li>
					</ul>
				</div>
			</div>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div id="content">
        <div class="inner">
         <h4 class="w3-center">My Profile</h4>
         <p class="w3-center"><img src="images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer, UI</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Egypt, Ismailia</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> 22, 12, 1996</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onClick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My message</button>
          <button onClick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
          <button onClick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
		  </div>   
      </div>
      <br>
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>Interests</p>
          <p>
            <span class="w3-tag w3-small w3-theme-d5">Dashboard</span>
            <span class="w3-tag w3-small w3-theme-d4">Now Showing</span>
            <span class="w3-tag w3-small w3-theme-d3">Bookings</span>
            <span class="w3-tag w3-small w3-theme-d2">Movies</span>
            <span class="w3-tag w3-small w3-theme-d1">Cinema Halls</span>
            <span class="w3-tag w3-small w3-theme">Options</span>
            <span class="w3-tag w3-small w3-theme-l1">Users</span>
            <span class="w3-tag w3-small w3-theme-l5">Preview &amp; Install</span>
          </p>
        </div>
      </div>
      <br>
      
      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onClick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p><strong>Hey!</strong></p>
        <p>Cheak your message frrom users.</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
      <div class="w3-container w3-card w3-white w3-round w3-margin" style="width:700px; background-color:#333333;"><br>
		<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "user");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM contact";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Name Your User</th>";
                echo "<th>His Email</th>";
                echo "<th>Message</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Message'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
      </div>  

      
    <!-- End Middle Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>
<br>

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
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script type="text/javascript"> Cufon.now(); </script>
</body>
 
</html> 
