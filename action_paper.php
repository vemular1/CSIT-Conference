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
	
$paper_title = $_POST['paper_title'];
$author_name = $_POST['author_name'];
$affiliation = $_POST['affiliation'];
$upload_paper = $_POST['upload_paper'];
$upload_date = $_POST['upload_date'];
 

$sql = "INSERT INTO `author_info` (`paper_title`, `affiliation`, `upload_paper`, `upload_date` `user_id`)
		VALUES ('$paper_title', '$affiliation', '$upload_paper', '$upload_date', '$user_id')";
		
	

	
		$query = mysqli_query($conn, $sql);
	if($query) {
	?>
     <script>
	 alert("Successfully Submit your data");
	 window.location.assign('online-registration.html');
	 </script> 
    
    <?php	
	}
	
	else{
		?>
     <script>
	 alert("Something Wrong");
	 window.location.assign('online-registration.html');
	 </script>   
        <?php
	}
	
	?>