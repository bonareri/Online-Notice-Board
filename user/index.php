<?php 
session_start();
include('../connection.php');



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
	<title> Student Dashboard</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

     <input type="checkbox" id="check">
    <header>
	     <label for="check">
		     <i class="fa fa-bars" id="sidebar_btn"></i>
		 </label>
	   <div class="left">
	       <h3>Student <span>Dashboard</span></h3>
	   </div>
	   <div class="right">
	      <a href="logout.php" class="logout">Logout</a>	   
	   </div>
	</header>
	
	   <div class="sidebar">
	   
		    <a href="#"><i class="fa fa-home"></i><span>Home</span></a>			
			<a href="index.php?page=notification"><i class="fa fa-envelope-open"></i><span>Notification</span></a>
			<a href="index.php?page=update_profile"><i class="fa fa-user"></i><span>Profile</span></a>
			<a href="index.php?page=update-password"><i class="fa fa-lock"></i><span>Update Password</span></a>
		    <a href="#"><i class="fa fa-sign-out-alt"></i><span>Sign Out</span></a>
	   
	   </div>
	   
	   <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
			if($page=="notification")
			{
				include('notification.php');
			
			}
			if($page=="update_profile")
			{
				include('update_profile.php');
			
			}
		  	if($page=="update-password")
			{
				include('update-password.php');
			
			}
		  }
		  else
		  {
		  include('notification.php');
		  ?>
		  <!-- container end-->
		   
		  
		  
		  <?php } ?>

</body>
</html>	

	