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
//include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Tour Company</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/responsive-tables.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        // dynamic table
        jQuery('#dyntable').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'asc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
        
        jQuery('#dyntable2').dataTable( {
            "bScrollInfinite": true,
            "bScrollCollapse": true,
            "sScrollY": "300px"
        });
        
    });
</script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

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
                          	<th class="head0 nosort"style="min-width:10%">Sr.No.</th>
                            <th class="head0"style="min-width:15%">User Roll</th>
                              <th class="head0"style="min-width:20%">User Name</th>
                               <th class="head0"style="min-width:15%">Password</th>
                                 <th class="head0"style="min-width:20%">Status</th>
                                <th class="head0"style="min-width:10%;">Creation date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="gradeX">
                        
                        
                        
                        <?php

						
                
$con=mysql_connect("$servername","$dbusername","$dbpassword");

mysql_select_db("$dbname",$con);
$rest = mysql_query("SELECT *
FROM  `admission_form` ORDER BY  `id` DESC");

$k=1;						
						

//while($row = mysql_fetch_array($rest))
{
	
	
?>
                            <td class="aligncenter"><?php echo $k;?></td>
                            <td><?php echo $row['sname'];?> </td>
                            <td><?php echo $row['sfname'];?></td>
                            <td><?php echo $row['class'];?></td>
                            <td><?php echo $row['to_date'];?></td>
                            <td ><?php echo $row['mo1'];?></td>
                             <td >
                              
                               <a href='view_form.php?url=<?php echo $row['id'];?>'><button class="btn btn-primary">View</button></a> 
                          </td>
                           <td >
                              
                               <a href='delete_formdata.php?url=<?php echo $row['id'];?>'><button class="btn btn-primary">Delete</button></a> 
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
