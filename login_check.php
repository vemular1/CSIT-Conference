<?php 
include 'config.php';
$email =NULL;
$password= NULL;
$email = $_POST['email'];
$password = $_POST['password'];
if( ($email != NULL) and ($password != NULL) )
{  
      $query_login_check  = "SELECT * from `users` WHERE email = '$email' AND password='$password' ";
	  $query = mysqli_query($conn, $query_login_check );
	 $query_login_check_result = mysqli_fetch_array($query);
	
	  if($query)
	  {
	 
	    
	    	$_SESSION['loged_user_id']= $query_login_check_result['id'];
			$_SESSION['loged_user_role_id']= $query_login_check_result['user_role_id'];
			$_SESSION['loged_user_email']= $query_login_check_result['email'];
			$_SESSION['loged_user_pass']= $query_login_check_result['password'];
		
		
	    	
	    	
	       ?> <script>
window.location.assign('paper-submission.php');
</script><?php
	  }
}
else {
?>
	<script>
 	alert("Please insert Email and password....");
	window.location.assign('reviewer-login.html');
	</script>
	<?php
}

?>