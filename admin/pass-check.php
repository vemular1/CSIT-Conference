<?php
session_start();
require 'connect.php';

if (isset($_SESSION['alogin']))
{

 $usrn =$_SESSION['alogin'];
 
 
      if(isset($_POST['username']) && !empty($_POST['username'])){
      $username=strtolower(mysql_real_escape_string($_POST['username']));
      $query="select password from users where username='$usrn'";
      $res=mysql_query($query);
	  while($row = mysql_fetch_array($res))
      {


        $k= $row['password'];

        }
  if($username==$k)
      {
      $count=0;
      }
	  
	if($username!=$k)
	  {
	   $count=1;
	  }
	
      if($count > 0){
        $HTML='user exists';
      }
	  
	  else{
        $HTML='';
      }
      echo $HTML;
  }
}
?>