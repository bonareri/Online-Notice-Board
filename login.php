<?php 
include('server.php')

?>
<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
 <div class="header">
   <h2>Login</h2>
 </div>
 

		<form method="post" action="login.php">
		  <?php include('errors.php'); ?>
			
            <div class="input-group">
			  <label>Email</label>
			  <input type="email" name="email" value="<?php echo $email; ?>">
			</div> 			
	
	        <div class="input-group">
			  <label>Password</label>
			  <input type="password" name="password" >
			</div> 
				
            <div class="input-group">
			  <button type="submit" class="btn" name="login_user">Login</button>
			</div>			
					
            <p class="link">
			 Not yet a member? <a href="registration.php">Sign up</a>
			</p>
				
		</form>
	</body>
</html>