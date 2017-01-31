<?php 
include 'header.php';
include 'config.php';
if(!empty($_GET['id']))
{
   $id=$_GET['id'];
}
?>


<body>

<div class="mainwrapper">
    
  
    
    <div class="rightpanel">
      <ul class="breadcrumbs">
        <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
        <li>Contact Person</li>
        <li></li>
        </ul>
        
      <div class="pageheader">
            
        <div class="pageicon"><span class="iconfa-user"></span></div>
            <div class="pagetitle">
                
                <h1>Contact Person</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
         <div class="maincontentinner">
       
                
                
           <h4 class="widgettitle">Contact Person</h4>
           <table>
<?php 
	
$query = "SELECT * FROM  `contact` where id = '$id'";
$res = mysql_query($query);
while($row = mysql_fetch_array($res))
{ 

?>

<tr>
  <td>Name</td> <td><?php echo $row['name']; ?></td> </tr>
  <tr><td>Email</td> <td><?php echo $row['email']; ?></td></tr>
  <tr><td>Subject</td> <td><?php echo $row['subject']; ?></td></tr>
  <tr><td>Message</td> <td>	<?php echo $row['message']; ?></td>
 
  </tr>
  <?php
}



?>
  
</table>
</div>  
  </div> 
  
  <?php
  
  include 'footer.php';
  ?>