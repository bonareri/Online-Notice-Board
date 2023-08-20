<?php 
include('server.php');
session_start();
 ?>
<html>
<head>
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Online Notice Board</title>
		<link rel="stylesheet" href="style.css"/>
		
</head>

<body>

  <div class="nav-bar-container">
	  <div class="nav-container">
	    <div class="logo">
		  <a href="#">ONLINE NOTICE BOARD</a>
		</div>
		
		<div class="navbar">
		  <ul class="nav-list">
			   <li><a href="index.php">HOME</a></li>
			   <li><a href="about.php">ABOUT</a></li>
			   <li><a href="contact.php">CONTACT</a></li>
			   <li><a href="registration.php">SIGN UP</a></li>
		       <li><a href="login.php">LOGIN</a>
			     <ul class="dropdown">
			   <li><a href="admin_login.php">ADMIN</a></li>
		       <li><a href="dept_login.php">DEPARTMENT</a></li>
		       <li><a href="student_login.php">STUDENT</a></li>
			     </ul>
			   </li>
		  </ul>
		</div>
      </div>
  </div>	  
	  
	<div class="image-container">
	    <img src="images/Desert.jpg" alt="">
	</div>
	
<br/>
<br/>
<br/>
<br/>

<!-- footer-->

  <div class="footer">
    <p>Digital Notice Board</p>     
  </div>
  
	</body>
</html>