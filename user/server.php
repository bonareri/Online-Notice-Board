<?php

//connecting to the database
$conn = mysqli_connect("localhost","root","","online_notice");

//initializing variables
$username = "";
$email = "";
$errors = array();

//User Registration
//receive input values from the form
if(isset($_POST['reg_user'])) {
	$username =  mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password_1 = mysqli_real_escape_string($conn, $_POST['password']);
	$password_2 = mysqli_real_escape_string($conn, $_POST['password']);
	
	//form validation
	if(empty($username)) { array_push($errors, "Username is required"); }
	if(empty($email)) { array_push($errors, "Email is required"); }
	if(empty($password_1)) { array_push($errors, "Password is required"); }
	if($password_1 != $password_2){
		array_push($errors, "The two passwords do not match");
	}
	
	//check if user already exist
	$user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";
	$result = mysqli_query($conn, $user_check_query);
	$user = mysqli_fetch_assoc($result);
	//if user exists
	if($user){
	 if($user['username'] === $username){
		array_push($errors, "Username already exist"); 
	 }
	 if($user['email'] === $email){
		array_push($errors, "Email already exist"); 
	 }
}

//Register user if there are no errors
if (count($errors) == 0) {
	$password = md5($password_1);//password encrypt
	
		$query = "INSERT INTO user (username, email, password)
	           VALUES('$username', '$email' , '$password')";
	    mysqli_query($conn, $query);
		$_SESSION['success'] = "Registration successful !!";
		header('location: index.php')
	}	
}

//LOGIN User
if(isset($_POST['login_user'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$usertype = mysqli_real_escape_string($conn, $_POST['usertype']);
	
	if(empty($email)) {
		array_push($errors, "Email is required"); 
		}
	if(empty($password)) { 
	   array_push($errors, "Password is required");
	}
	
	if (count($errors) == 0) {
	$password = md5($password);//password encrypt
	$query = "SELECT * FROM `user` WHERE email = '$email' AND password = '$password' AND usertype = '$usertype'";
	$results = mysqli_query($conn, $query);
	if($results){
		while($row=mysqli_fetch_array($results)){
			echo<script type="text/javascript">alert("Login successful, you are logged in as ' .$row['usertype'].'")</script>
		}
		if (mysqli_num_rows($results)>0) {
	      ?>
		  <script type="text/javascript">window.location.href=" header('location:admin');"</script>
		  <?php
   }else{
	    ?>
		  <script type="text/javascript">window.location.href=" header('location:user');"</script>
		  <?php
   }
}
	else{
	array_push($errors, "Invalid login details");
}
	}
}
//Update Password

if(isset($_POST['change-p'])) {
	//receive input values from the form
	$op= mysqli_real_escape_string($conn, $_POST['op']);
	$np = mysqli_real_escape_string($conn, $_POST['np']);
	$c_np = mysqli_real_escape_string($conn, $_POST['c_np']);
	
	if(empty($op)) {
		array_push($errors, "Old Password is required"); 
		}
	if(empty($np)) { 
	   array_push($errors, "New Password is required");
	}
	if(empty($c_np)) { 
	   array_push($errors, "Confirmation Password is required");
	}
	else if($np!= $c_np){
		array_push($errors, "Confirmation password does not match");
	}else{
	
	//Change user password if there are no errors
	
	//hash password
		$op = md5($op);
		$np = md5($np);
		
		$query = "SELECT password
	        FROM user WHERE id='$id' AND password='$op'";
	    $result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result) === 1){
			 $query_2 = "UPDATE user SET password='$np' WHERE id='$id'";
			 mysqli_query($conn, $query_2);
		     array_push($errors, "<font color='green'>Password Changed Successfully !!</font>"); 
	    }else{
		array_push($errors, "Incorrect Password !!"); 
	}
}
}

?>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
