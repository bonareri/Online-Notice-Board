<?php
$conn = mysqli_connect("localhost","root","","digital_notice");

$id = $_GET['id'];
$query = "DELETE from users where user_id = $id";
if(mysqli_query($conn,$query)){
    header('location:user.php');
}else{
	echo mysql_error($conn);
}
?>