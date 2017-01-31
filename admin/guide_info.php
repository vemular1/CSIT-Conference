<?php
session_start();
extract($_POST);

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
include 'config.php';
?>


<body>

<div class="mainwrapper">
    
  
    <?php include('header.php'); ?>
    
    <div class="rightpanel">
      <ul class="breadcrumbs">
        <li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
        <li>Guide Information</li>
        <li></li>
        </ul>
        
      <div class="pageheader">
            
        <div class="pageicon"><span class="iconfa-user"></span></div>
            <div class="pagetitle">
                
                <h1>Guide Information</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
         <div class="maincontentinner">
                   
           <h4 class="widgettitle">Guide Details</h4>
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
                            <th class="head0"style="min-width:5%">User Id</th>
                              <th class="head0"style="min-width:10%">Name</th>
                               <th class="head0"style="min-width:10%">email</th>
                                 <th class="head0"style="min-width:10%">Country</th>
                                <th class="head0"style="min-width:10%;">Mobile</th>
                                <th class="head0"style="min-width:10%;">Last login</th>
                                 <th class="head0"style="min-width:10%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                        
                        
                        
                        <?php
$rest = mysql_query("SELECT *
FROM  `guide_info` ORDER BY  `id` DESC");

$k=1;						
						

while($row = mysql_fetch_array($rest))
{
	
	
?>
                            <td class="aligncenter"><?php echo $k;?></td>
                            <td><?php echo $row['user_id'];?> </td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['country'];?></td>
                            <td ><?php echo $row['mobile_no'];?></td>
                             <td ><?php echo $row['last_login'];?></td>
                             <td class="center">
                              
                                <a title="View" href='client_guide.php?guide_id=<?php echo $row['user_id'];?>'>View Tour</a>
                              
                             <!--   |<a title="Edit" href='view_guide_info.php?id=<?php echo $row['id'];?>'>Edit</a> -->
                         
                         |<a title="Delete" href='guide_delete.php?url_delete_guide_info=<?php echo $row['id'];?>'>Delete</a>
                          </td>
                                  
                              
                        </tr>
                       
                      <?php 

$k++;
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
