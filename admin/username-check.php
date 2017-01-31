<?php

session_start();
extract($_POST);

echo "<BR>";
if (!isset($_SESSION['alogin']))
{
	?>
     <script>
   alert("You are not loged in plz log in");
</script>
	<script type="text/javascript">window.location='index.php';</script>
    
	<?php
	exit();
}

require 'connect.php';
if(isset($_POST['username']) && !empty($_POST['username'])){
      $username=strtolower(mysql_real_escape_string($_POST['username']));
      $query="select * from users where LOWER(username)='$username'";
      $res=mysql_query($query);
	  
	  
	  
      $count=mysql_num_rows($res);
      $HTML='';
      if($count > 0){
        $HTML='user exists';
      }else{
        $HTML='';
      }
      echo $HTML;
}
?>