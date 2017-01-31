<?php
include 'config.php';

if(isset($_GET['url1'])) {
$prod_id1 = $_GET['url1'];
$qry1 = "DELETE FROM `student_info` WHERE `user_id` = ".$prod_id1;
$result1=mysql_query($qry1);
if($result1) {
?>
<script>
alert ('Data deleted successfully');
window.location.assign('student.php');
</script>
<?php
}
}


if(isset($_GET['url2'])) {
$prod_id2 = $_GET['url2'];
$qry2 = "DELETE FROM `author_info` WHERE `user_id` = ".$prod_id2; 
$result=mysql_query($qry2);
if($result2) {
?>
<script>
alert ('Data deleted successfully');
window.location.assign('author.php');
</script>
<?php
}
}

if(isset($_GET['url3'])) {
$prod_id3 = $_GET['url3'];
$qry3 = "DELETE FROM `attendee_info` WHERE `user_id` = ".$prod_id3;
$resul3t=mysql_query($qry3);
if($result) {
?>
<script>
alert ('Project deleted successfully');
window.location.assign('attendee.php');
</script>
<?php
}
}

if(isset($_GET['url4'])) {
$prod_id4 = $_GET['url4'];
$qry4 = "DELETE FROM `feedback` WHERE `id` = ".$prod_id4;
$result4=mysql_query($qry4);
if($result4) {
?>
<script>
alert ('Project deleted successfully');
window.location.assign('student.php');
</script>
<?php
}
}
?>
