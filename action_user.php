<?php include 'config.php'; 
$user_role_id = $_POST['user_role_id'];
$email = $_POST['email'];
$password = $_POST['password'];

	  $sql1 = "INSERT INTO `users` (`user_role_id`, `email`, `password`)
	VALUES ('$user_role_id', '$email', '$password')";
	
	$query1=mysqli_query($conn, $sql1);
	if($query1) {
	$sql2 = mysqli_query($conn, "SELECT MAX(`id`) FROM `users`");
	$row = mysqli_fetch_array($sql2);
	$user_id = $row['MAX(`id`)'];
}	
	
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$company = $_POST['company'];
$gender = $_POST['gender'];

if($user_role_id == '0')
{
$sql = "INSERT INTO `author_info` (`fname`, `lname`, `mobile`, `address`, `company`, `gender`, `user_id`)
		VALUES ('$fname', '$lname', '$mobile', '$address', '$company', '$gender', '$user_id')";
		
	
}
if($user_role_id == '1')
{
 $sql = "INSERT INTO `student_info` (`fname`, `lname`, `mobile`, `address`, `company`, `gender`, `user_id`)
		VALUES ('$fname', '$lname', '$mobile', '$address', '$company', '$gender', '$user_id')";
	
}
if($user_role_id == '2')
{
$sql = "INSERT INTO `attendee_info` (`fname`, `lname`, `mobile`, `address`, `company`, `gender`, `user_id`)
		VALUES ('$fname', '$lname', '$mobile', '$address', '$company', '$gender', '$user_id')";
	
}
	
		$query = mysqli_query($conn, $sql);
	if($query) {
	?>
     <script>
	 alert("Successfully Submit your data");
	 window.location.assign('paper-submission.php');
	 </script> 
    
    <?php	
	}
	
	else{
		?>
     <script>
	 alert("Something Wrong");
	 window.location.assign('online-registration.php');
	 </script>   
        <?php
	}
	
	?>