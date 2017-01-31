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
        <li>Admission Form</li>
        <li></li>
        </ul>
        
      <div class="pageheader">
            
        <div class="pageicon"><span class="iconfa-user"></span></div>
            <div class="pagetitle">
                
                <h1>Admission Details</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
         <div class="maincontentinner">
                   
           <h4 class="widgettitle">Admission Details</h4>
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
                            <th class="head0"style="min-width:10%">Tourist Id</th>
                              <th class="head0"style="min-width:10%">Guide Id</th>
                               <th class="head0"style="min-width:10%">Stars</th>
                                 <th class="head0"style="min-width:10%">Message</th>
                                <th class="head0"style="min-width:10%;">Status</th>
                                <th class="head0"style="min-width:10%;">review</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                        
                        
                        
                        <?php
 
$rest = mysql_query("SELECT *
FROM  `review` ORDER BY  `id` DESC");

$k=1;						
						

while($row = mysql_fetch_array($rest))
{
	
	
?>
                            <td class="aligncenter"><?php echo $k;?></td>
                            <td><?php echo $row['tourist_id'];?> </td>
                            <td><?php echo $row['guide_id'];?></td>
                            <td><?php echo $row['star'];?></td>
                            <td><?php echo $row['message'];?></td>
                            <td ><?php echo $row['status'];?></td>
                             <td class="center">
                              
                               <a href='delfok.php?url=<?php echo $row['id'];?>'><img src="icons/delete.png"></a> 
                               <img src="icons/line.png">
                                <a href='view_review.php?id=<?php echo $row['id'];?>'><img src="icons/view.png"></a> 
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
