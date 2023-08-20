<?php  
include('connection.php');
 $id = 0;
 $result = mysqli_query($conn, "SELECT * FROM notice ORDER BY notice_id DESC");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Notice</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

	<form method="post" action="index.php?page=add-notice.php" >
	<table width='50%' border="1">
	 <tr bgcolor='grey'>
		<td>Subject</td>
		<td>Description</td>
		<td>Date</td>
		<td>Posted By</td>
		<td>Update</td>
		<td>Remove</td>
	 </tr>
	 <?php 
	    while($res = mysqli_fetch_array($result)) { 
			echo "<tr>";
			echo "<td>".$res['subject']."</td>";
			echo "<td>".$res['description']."</td>";
			echo "<td>".$res['post_date']."</td>";
			echo "<td>".$res['posted_by']."</td>";
			echo "<td bgcolor='green'><a href='index.php?page=edit-notice.php'><font color='white'>Edit</a>"; 
			echo "<td bgcolor='red'><a href='delete-notice.php?' onClick='return confirm('Are you sure you want to delete?')'><font color='white'>Delete</a>";
		}
		?>
	  
	</table>
	</form>	
</body>

</html>

