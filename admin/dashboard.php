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
       
        
      <div class="pageheader">
            
        <div class="pageicon"><span class="iconfa-user"></span></div>
            <div class="pagetitle">
                
                <h1>Welcome to Congress IT</h1>
            </div>
        </div><!--pageheader-->
        
        
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

</body>
</html>
