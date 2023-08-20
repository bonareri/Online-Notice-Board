<?php 
$conn = mysqli_connect("localhost","root","","digital_notice");
  if(isset($_POST['reg_user'])){
  	$user_name = $_POST['user_name'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  	$query = "INSERT into users values (null, '$user_name', '$email', '$password')";
  	if(mysqli_query($conn, $query)){
         echo '<script>alert("User registered successfully");</script>';
         header('location:user.php');
  	}else{
  		echo mysqli_error($conn);
  	}
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD Operations</title>
</head>
<body>
	<form method="post" action="">
		<label>Username</label>
		<input type="text" name="user_name" placeholder="Enter Username">
		<br><br>
		<label>Email</label>
		<input type="email" name="email" placeholder="Enter Email">
		<br><br>
		<label>Password</label>
		<input type="password" name="password" placeholder="Enter Password">
		<br><br>
		<input type="submit" name="reg_user" value="Register">
	</form>
</body>
</html>	