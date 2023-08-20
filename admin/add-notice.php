<?php 
$conn = mysqli_connect("localhost","root","","online_notice");
  if(isset($_POST['add_notice'])){
  	$subject = $_POST['subject'];
  	$description = $_POST['description'];
  	$post_date = $_POST['post_date'];
  	$posted_by = $_POST['posted_by'];

  	$query = "INSERT INTO notice (subject, description, post_date, posted_by)
	           VALUES('$subject','$description','$post_date','$posted_by')";
  	if(mysqli_query($conn, $query)){
         echo '<script>alert("Notice added successfully");</script>';
         header('location:index.php?page=add-notice');
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
	<form method="post" action="" style="margin:310px">
		<label>Subject</label>
		<input type="text" name="subject" placeholder="Subject">
		<br><br>
		<label>Description</label>
		<input type="text" name="description" placeholder="Description">
		<br><br>
		<label>Date</label>
		<input type="date" name="post_date" placeholder="Date">
		<br><br>
		<label>Posted By</label>
		<input type="text" name="posted_by" placeholder="Posted By">
		<br><br>
		<input type="submit" name="add_notice" value="Add Notice">
	</form>
</body>
</html>	