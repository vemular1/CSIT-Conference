<html>
<head>
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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSIT World Congress</title>
</head>

  <div class="header">
        <div class="logo" >
            <a href="dashboard.php"><span style="color: #fff; font-size: 38px; font-family: Verdana, Geneva, sans-serif; margin: 0px;">CSIT World Congress</span></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">
               
              <li class="right">
                  <div class="userloggedinfo">
                    
                        <div class="userinfo">
                                   <h2>CSIT<small>info@mail.com</small></h2>
                                     <ul>  
                                 <li style="font-size:20px;">  <a href="logout.php">Sign Out</a></li>
                                     </ul>
                            </div>
                  </div>
                </li>
            </ul>
          <!--headmenu-->
        </div>
    </div>
    <div class="leftpanel">
        
        <div class="leftmenu nav-center">        
            <ul class="nav nav-tabs nav-pills">
                <li><a href="dashboard.php"><span class="iconfa-user"></span>Dashboard</a></li>
                <li><a href="student.php"><span class="iconfa-user"></span>Student Info</a></li>
                 <li><a href="author.php"><span class="iconfa-list-alt"></span>Author Info</a></li>
                 <li><a href="attendee.php"><span class="iconfa-list-alt"></span>Regular Attendee</a></li>
                 <li><a href="feedback.php"><span class="iconfa-list-alt"></span>feedback</a></li>
            </ul>
        </div><!--leftmenu-->
        
    </div><!-- leftpanel -->