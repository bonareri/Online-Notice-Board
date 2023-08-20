<?php
$conn = mysqli_connect("localhost","root","","digital_notice");

$id = $_GET['id'];
$query = "SELECT * from users where user_id = $id";
$result = $conn -> query($query);
		if($result -> num_rows > 0){
             while($row = $result -> fetch_assoc()){
                    $user_name = $row['user_name'];
                    $email = $row['email'];
                    $password = $row['password'];
                }
              }  

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Users</title>
</head>
<body>
	<form method="post" action="">
		<label>Username</label>
		<input type="text" name="user_name" value="<?php echo $user_name ?>">
		<br><br>
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email ?>">
		<br><br>
		<label>Password</label>
		<input type="password" name="password" value="<?php echo $password ?>">
		<br><br>
		<input type="submit" name="update" value="Edit">
	</form>	
</body>
</html>	
<?php
if (isset($_POST['update'])){
  	$user_name = $_POST['user_name'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];

  	$query = "UPDATE users set user_name='$user_name', email='$email', password='$password' where user_id=$id";
  	if(mysqli_query($conn, $query)){
         echo '<script>alert("User updated successfully");</script>';
         header('location:user.php');
  	}else{
  		echo mysqli_error($conn);
  	}
  }
?>