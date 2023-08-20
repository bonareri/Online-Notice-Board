<?php
include('connection.php');

$id = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM notice where notice_id=$id");
while ($row=mysqli_fetch_array($result)) {
 	 $subject = $row['subject'];
 	  $description = $row['description'];
 	   $post_date = $row['post_date'];
 	    $posted_by = $row['posted_by'];
 } 

?>
<html>
<head>
     <title>Edit Notice</title>
	  <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
<div class="header">
   <h2>Edit Notice</h2>
 </div>
<form method="post" action="index.php?page=edit-notice">
   <input type="hidden" name="id" value="<?php echo $id; ?>">
		   <?php include('errors.php'); ?>
			<div class="input-group">
			  <label>Subject</label>
			  <input type="text" name="subject" value="<?php echo $subject; ?>">
			</div> 
            
            <div class="input-group">
			  <label>Description</label>
			  <input type="text" name="description" value="<?php echo $description; ?>">
			</div>

			<div class="input-group">
			  <label>Date</label>
			  <input type="date" name="post_date" value="<?php echo $date; ?>">
			</div> 		

			<div class="input-group">
			  <label>Posted By</label>
			  <input type="text" name="posted_by" value="<?php echo $posted_by; ?>">
			</div> 		 			
	
            <div class="input-group">
	            <button class="btn" type="submit" name="update_notice" >Edit Notice</button>
		   </div>				
</body>	 
