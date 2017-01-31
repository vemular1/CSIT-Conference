<?php
include 'config.php';
if($_REQUEST['url_delete_guide_info'])
{
$url_delete_guide_info=$_REQUEST['url_delete_guide_info'];
mysql_query("DELETE FROM `guide_info` WHERE id='$url_delete_guide_info'");
?>
	<script>
    alert('Successfully Deleted');
	window.location='guide_info.php';
    
    
    </script>
	
	<?php

	
}
?>