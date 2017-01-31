<?php
include 'config.php';
include 'header.php';
if(isset($_SESSION['user_name']) &&  isset($_SESSION['user_password'])) {  

} else {
header("location:index.php");	
}
?>
<div class="mainwrapper">
    
    
    <div class="rightpanel">
      <ul class="breadcrumbs">
        <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
        <li>Author Info</li>
        <li></li>
        </ul>
        
      <div class="pageheader">
            
       
            <div class="pagetitle">
                
                <h1>Author info Details</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
         <div class="maincontentinner">
                   
           <h4 class="widgettitle">Author Details</h4>
                <table id="dyntable" class="table table-bordered">
                   
                    <colgroup>
                        <col class="con0" style="align: center; width: 4%;" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        
                        <col class="con0" />
                        <col class="con1" />
                         <col class="con0" />
                    </colgroup>
                   
                    <thead>
                        <tr>
                          	<th class="head0 nosort"style="min-width:5%">Sr.No.</th>
                            <th class="head0"style="min-width:5%">Id</th>
                              <th class="head0"style="min-width:10%">Frist Name</th>
                              <th class="head0"style="min-width:10%">Last Name</th>
                               <th class="head0"style="min-width:10%">Email</th>
                                 <th class="head0"style="min-width:10%">Mobile</th>
                                <th class="head0"style="min-width:10%;">Address</th>
                                <th class="head0"style="min-width:10%;">Company</th>
                                <th class="head0"style="min-width:10%;">Gender</th>
                                <th class="head0"style="min-width:10%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                        
                        
                        


 <?php

$rest = mysqli_query($conn, "SELECT * FROM `author_info` ");

$k=1;						
						

while($row = mysqli_fetch_array($rest))
{
	$stu_id =$row['user_id'];
	$query_up_file = mysqli_query($conn, "SELECT * FROM `submit_paper` where `user_id` = '$stu_id'  ");
	while($rowquery_up_file = mysqli_fetch_array($query_up_file))
{
	$up_file =$rowquery_up_file['upload_paper'];

	
	
?> <td class="aligncenter"><?php echo $k;?></td>
                            <td><?php echo $row['user_id'];?> </td>
                            <td><?php echo $row['fname'];?></td>
                            <td><?php echo $row['lname'];?></td>
                            <td><?php echo $row['mobile'];?></td>
                            <td ><?php echo $row['address'];?></td>
                             <td ><?php echo $row['company'];?></td>
                             <td ><?php echo $row['gender'];?></td>
                              <td ><a href="../<?php echo $up_file; ?>" target="_blank">download</a></td>
                             <td class="center">
                              
                             
                              
                              <!--  <a title="View" href='view_tourist_info.php?id=<?php echo $row['id'];?>'>View</a>
                                
                                 |<a title="Edit" href='edit_tourist_info.php?id=<?php echo $row['id'];?>'>Edit</a> -->
                                   
                                     <a title="Delete" href='delete.php?url2=<?php echo $row['user_id'];?>'>Delete</a> 
                          </td>
                                 
                        </tr>
                       
                      <?php 

$k++;
}
}

?>
                    </tbody>
                </table>
                
          
             
                
               
         <?php include('footer.php'); ?>
          </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>
</html>
