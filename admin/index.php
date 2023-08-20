<?php 
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
	<title> Admin Dashboard</title>
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
	       <h3>Admin <span>Dashboard</span></h3>
	   </div>
	   <div class="right">
	      <a href="logout.php" class="logout">Logout</a>	   
	   </div>
	</header>
	
	   <div class="sidebar">
	   
	        <a href="index.php?page=manage-notice"><i class="fa fa-home"></i><span>Manage Notification</span></a>
		    <a href="index.php?page=add-notice"><i class="fa fa-home"></i><span>Add Notification</span></a>
			<a href="index.php?page=edit-notice"><i class="fa fa-home"></i><span>Edit Notification</span></a>
			<a href="index.php?page=manage-users"><i class="fa fa-user"></i><span>Manage Users</span></a>
			<a href="index.php?page=update_profile"><i class="fa fa-envelope-open"></i><span>Update Profile</span></a>
			<a href="index.php?page=update-password"><i class="fa fa-lock"></i><span>Update Password</span></a>
		    <a href=""><i class="fa fa-sign-out-alt"></i><span>Sign Out</span></a>
	   
	   </div>
	   
	   <?php 
		@$page=  $_GET['page'];
		  if($page!="")
		  {
		  	if($page=="add-notice")
			{
				include('add-notice.php');
			
			}
			if($page=="manage-notice")
			{
				include('manage-notice.php');
			
			}
			if($page=="edit-notice")
			{
				include('edit-notice.php');
			
			}
			if($page=="manage-users")
			{
				include('manage-users.php');
			
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

	