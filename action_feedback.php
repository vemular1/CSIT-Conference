<?php include 'config.php'; 

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$feedback = $_POST['feedback'];
$comment = $_POST['comment'];

$sql = "INSERT INTO `feedback` (`fname`, `lname`, `email`, `mobile`, `feedback`, `comment`)
		VALUES ('$fname', '$lname', '$email', '$mobile', '$feedback', '$comment')";
	
		$query = mysqli_query($conn, $sql);
	if($query) {
	?>
     <script>
	 alert("Successfully Submit your data");
	 window.location.assign('index.php');
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