<?php 
include 'config.php'; 
$loged_user_id = $_POST['logged_user_id'];
$paper_title = $_POST['paper_title'];
$author_name = $_POST['author_name']; 
$affiliation = $_POST['affiliation']; 
$upload_paper = $_FILES['upload_paper']['name'];   
$upload_date = date('Y-m-d');

//image 
$target_dir = "upload/";
$ta = rand().basename($upload_paper);
$target_file = $target_dir.$ta;
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($loged_user_id) && ($paper_title) && isset($author_name) && isset($affiliation) && isset($upload_paper) && isset($upload_date)) 
	{
 move_uploaded_file($_FILES["upload_paper"]["tmp_name"], $target_file);
	 $sql = "INSERT INTO `submit_paper` (`user_id`, `paper_title`, `author_name`, `affiliation`, `upload_paper`, `upload_date`)
		VALUES ('$loged_user_id', '$paper_title', '$author_name', '$affiliation', '$target_file', '$upload_date')"; 
		$query = mysqli_query($conn, $sql); 
	if($query) {
	?>
     <script>
	 alert("Successfully Add Your Product");
	 window.location.assign('paper-submission.php');
	 </script> 
    
    <?php	
	}
	}
	else{
		?>
     <script>
	 alert("Something Wrong");
	 window.location.assign('paper-submission.php');
	 </script>   
        <?php
	}
	?>