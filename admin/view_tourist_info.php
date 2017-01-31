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
        <li>View Client Info</li>
        <li></li>
        </ul>
        
      <div class="pageheader">
            
        <div class="pageicon"><span class="iconfa-user"></span></div>
            <div class="pagetitle">
                
                <h1>View Client Info</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
         <div class="maincontentinner">
       
                
                
           <h4 class="widgettitle">View Client Info</h4>
             <div  style="margin: 30px; text-align:center;">
           <table align="center" width="600" style="border: 2px outset #999 !important; border: " >
           <style>
		   table tr td{
			   padding: 10px !important;
			   border: 1px outset #e0e0e0 !important; 
			   background-color: #CCC !important; 
			    
		   }
		   </style>
<?php 
	
$query = "SELECT * FROM  `tourist_user_info` where id = '$id'";
$res = mysql_query($query);
while($row = mysql_fetch_array($res))
{ 

?>
 

<tr>
  <tr><td>User Id</td>  <td><?php echo $row['user_id'];?> </td></tr>
  <tr><td>Name</td> <td><?php echo $row['name'];?></td></tr>
  <tr><td>Email</td> <td><?php echo $row['email'];?></td></tr>
  <tr><td>Country</td> <td><?php echo $row['country'];?></td></tr>
  <tr><td>Mobile</td> <td><?php echo $row['mobile_no'];?></td></tr>
  <tr><td>Last Login</td> <td><?php echo $row['last_login'];?></td></tr>
  <?php
}



?>
  
</table>
</div>  
  </div> 
  </div>
  <?php
  
  include 'footer.php';
  ?>