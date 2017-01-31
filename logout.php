<?php 
session_start();
unset($_SESSION['loged_user_role']);
unset($_SESSION['loged_user_email']);
unset($_SESSION['loged_user_pass']);
header("Location:index.php");
?>