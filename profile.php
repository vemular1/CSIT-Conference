<?php include 'header.php'?>
    <div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <h2 class="art-postheader"></h2>
                                                
                                <div class="art-postcontent art-postcontent-0 clearfix"><p style="text-align: center;">
								<div class="art-postcontent art-postcontent-0 clearfix"><br>
									<p style="text-align: center; "><span style="font-size: 18px;"><br></span>
									<br></p>
        
        <div class="maincontent">
         <div class="maincontentinner"  style="margin-top: -88px; margin-bottom: 102px;">
                   
           <h4 class="widgettitle" style="text-align: center; "> Your Details</h4>
                <table id="dyntable" class="table table-bordered">
                    <thead>
                        <tr>
                          	<th class="head0 nosort"style="min-width:5%">Sr.No.</th>
                            <th class="head0"style="min-width:5%">Id</th>
                              <th class="head0"style="min-width:10%">Name</th>
                                 <th class="head0"style="min-width:10%">Mobile</th>
                                <th class="head0"style="min-width:10%;">Address</th>
                                <th class="head0"style="min-width:10%;">Company</th>
                                <th class="head0"style="min-width:10%;">Gender</th>
                                <th class="head0"style="min-width:10%;">Download Paper</th>
                               
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                        
                         <?php
							if($_SESSION['loged_user_role_id'] == '0') {

$rest = mysqli_query($conn, "SELECT * FROM `author_info` ");

$k=1;						
						

while($row = mysqli_fetch_array($rest))
{
	 $stu_id =$row['user_id']; 
 $query_up_file = mysqli_query($conn, "SELECT * FROM `submit_paper` where `user_id` = '$stu_id'  ");

	while($rowquery_up_file = mysqli_fetch_array($query_up_file))
{
	$up_file =$rowquery_up_file['upload_paper'];

	
	
?>
	
<td class="aligncenter"><?php echo $k;?></td>
                            <td><?php echo $row['user_id'];?> </td>
                            <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td> 
                           
                            <td><?php echo $row['mobile'];?></td>
                            <td ><?php echo $row['address'];?></td>
                             <td ><?php echo $row['company'];?></td>
                             <td ><?php echo $row['gender'];?></td>
                              <td ><a href="<?php echo $up_file; ?>" target="_blank">download</a></td>
                             
                             
                            
                                 
                        </tr>
                       
                      <?php 

$k++;
}
}
}
						if($_SESSION['loged_user_role_id'] == '1') {
						
						

$rest = mysqli_query($conn, "SELECT * FROM  `student_info` ORDER BY  `id` DESC");

$k=1;						
						

while($row = mysqli_fetch_array($rest))
{
	$stu_id =$row['user_id'];
$query_up_file = mysqli_query($conn, "SELECT * FROM `submit_paper` where `user_id` = '$stu_id'  ");
	while($rowquery_up_file = mysqli_fetch_array($query_up_file))
{
	$up_file =$rowquery_up_file['upload_paper'];

	
	
?>
 <td class="aligncenter"><?php echo $k;?></td>
                            <td><?php echo $row['user_id'];?> </td>
                            <td><?php echo $row['fname'];?> <?php echo $row['lname'];?></td>
                           
                            <td><?php echo $row['mobile'];?></td>
                            <td ><?php echo $row['address'];?></td>
                             <td ><?php echo $row['company'];?></td>
                             <td ><?php echo $row['gender'];?></td>
                              <td ><a href="<?php echo $up_file; ?>" target="_blank">download</a></td>
                             
                            
                                 
                        </tr>
                       
                      <?php 

$k++;
}
}
}

	if($_SESSION['loged_user_role_id'] == '2') {
						
						

$rest = mysqli_query($conn, "SELECT * FROM  `attendee_info` ORDER BY  `id` DESC");

$k=1;						
						

while($row = mysqli_fetch_array($rest))
{
	$stu_id =$row['user_id'];
	$query_up_file = mysqli_query($conn, "SELECT * FROM `submit_paper` where `user_id` = '$stu_id'  ");
	while($rowquery_up_file = mysqli_fetch_array($query_up_file))
{
	$up_file =$rowquery_up_file['upload_paper'];

	
	
?>
 <td class="aligncenter"><?php echo $k;?></td>
                            <td><?php echo $row['user_id']; ?> </td>
                            <td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
                          
                            <td><?php echo $row['mobile']; ?></td>
                            <td ><?php echo $row['address']; ?></td>
                             <td ><?php echo $row['company']; ?></td>
                             <td ><?php echo $row['gender']; ?></td>
                              <td ><a href="<?php echo $up_file; ?>" target="_blank">download</a></td>
                             
                            
                                 
                        </tr>
                       
                      <?php 

$k++;
}
}
}
?>
                    </tbody>
                </table>
                
            </p>
                <p>
                </p><p></p></div>
								
								
								
								</div>
                                
                

</article></div>
                    </div>
                </div>
            </div>
    </div>
             
                
               
         <?php include('footer.php'); ?>
          </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>
</html>
