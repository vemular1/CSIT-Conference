<?php 
include 'config.php';
$user_name =NULL;
$user_password= NULL;
$user_name = $_POST['user_name'];
$user_password = $_POST['user_password'];
if( ($user_name != NULL) and ($user_password != NULL) )
{  
      $query_login_check  = "SELECT * from `admin` WHERE user_name = '$user_name' AND user_password='$user_password' ";
	  $query = mysqli_query($conn, $query_login_check );
	 $query_login_check_result = mysqli_fetch_array($query);
	
	  if($query)
	  {
	 
			 $_SESSION['user_name']= $query_login_check_result['user_name'];
			 $_SESSION['user_password']= $query_login_check_result['user_password'];
	
		
	    	
	    	
	       ?> <script>
		   alert("You are successfully logged in.");
window.location.assign('dashboard.php');
</script><?php
	  }
}
else {
?>
	<script>
 	alert("Wrong Username or Password");
	window.location.assign('index.php');
	</script>
	<?php
}

?>