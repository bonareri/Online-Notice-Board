<?php
   
//initializing variables
$username = "";
$email = "";
$id = "";
$errors = array();

//connecting to the database
$conn = mysqli_connect("localhost","root","","online_notice");

//User Registration
if(isset($_POST['reg_user'])) {
	//receive input values from the form
	//escape special characters if any for use in the SQL query
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
	
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
	           VALUES('$username','$email','$password')";
			   
	$results = mysqli_query($conn, $query);
	array_push($errors, "<font color='green'>Registration successful !!</font>"); 
}
}

//LOGIN User
if(isset($_POST['login_user'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	
	if(empty($email)) {
		array_push($errors, "Email is required"); 
		}
	if(empty($password)) { 
	   array_push($errors, "Password is required");
	}
	
	if (count($errors) == 0) {
	$password = md5($password);//password encrypt
	$query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
	$results = mysqli_query($conn, $query);
	if (mysqli_num_rows($results) == 1) {
	$_SESSION['admin']=$email;

    header('location:admin');
}else{
	array_push($errors, "Invalid login details");
}
	}
}

//initializing variables
$description = "";
$subject = "";
$post_date = "";
$posted_by = "";
$notice_id = "";
$errors = array();

//Add Notice
if(isset($_POST['add_notice'])) {
	//receive input values from the form
	//escape special characters if any for use in the SQL query
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$post_date = mysqli_real_escape_string($conn, $_POST['post_date']);
	$posted_by = mysqli_real_escape_string($conn, $_POST['posted_by']);
	
	//form validation
	if(empty($subject)) { array_push($errors, "Subject is required"); }
	if(empty($description)) { array_push($errors, "Description is required"); }
	if(empty($post_date)) { array_push($errors, "Date is required"); }
	if(empty($posted_by)) { array_push($errors, "Posted by is required"); }
	

//Register user if there are no errors
if (count($errors) == 0) {
	
	$query = "INSERT INTO notice (subject, description, post_date, posted_by)
	           VALUES('$subject','$description','$post_date', '$posted_by')";
			   
	$results = mysqli_query($conn, $query);
	array_push($errors, "<font color='green'>Notice added successfully !!</font>"); 
}
}
?>

	
	
	
	
	
	
	
	
	
	
	
	
	
	
