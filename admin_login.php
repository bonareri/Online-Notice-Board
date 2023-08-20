<?php $conn = mysqli_connect("localhost","root","","digital_notice"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD Operations</title>
</head>
<body>

	<hr>
	<h3><a href="add_user.php">Add User</a></h3>
	<table style="width:50%" border="1">
		<tr>
			<th>Reg No#</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th>Operations</th>
		</tr>
		<?php
		$i = 1;
		$query = "SELECT * from users";
		$result = mysqli_query($conn,$query);
		if($result -> num_rows > 0){
             while($row = $result -> fetch_assoc()){
                    $id = $row['user_id'];
		?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $row['user_name'] ?></td>
			<td><?php echo $row['email'] ?></td>
			<td><?php echo $row['password'] ?></td>
			<td>
				<a href="edit.php?id=<?php echo $id;?>">Edit</a>
				<a href="delete.php?id=<?php echo $id;?>" onclick="return confirm('Are you sure?')">Delete</a>
			</td>
		</tr>
		<?php
	          }
           }
        ?>   
	</table>
</body>
</html>	




