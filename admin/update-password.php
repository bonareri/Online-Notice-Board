<?php 
include('server.php')

?>
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	
</head>
<body>
<div class="header">
  <h2>Change Password</h2>
</div>
     <form action="update-password.php" method="post">
     	
		<div class="input-group">
			  <label>Old Password</label>
			  <input type="password" name="op" placeholder="Old Password"><br>
		</div> 
		
		<div class="input-group">
			  <label>New Password</label>
			 <input type="password" name="np" placeholder="New Password"><br>
		</div> 

		<div class="input-group">
			  <label>Confirm New Password</label>
			 <input type="password" name="c_np" placeholder="Confirm New Password"><br>
		</div> 	

     	<button type="submit" name="change-p" class="btn" >Change</button>
         
     </form>
	 
</body>
</html>


