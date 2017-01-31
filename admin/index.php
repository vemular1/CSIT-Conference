<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>CSIT World Congress</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/style.shinyblue.css" type="text/css" />

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#login').submit(function(){
            var u = jQuery('#username').val();
            var p = jQuery('#password').val();
            if(u == '' && p == '') {
                jQuery('.login-alert').fadeIn();
                return false;
            }
        });
    });
</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="loginpage">

<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo"><h3 style="color:#FFF;">CSIT World Congress</h3></div>
        <form id="login" action="login_check.php" enctype="multipart/form-data" method="post" />
            <div class="inputwrapper login-alert">
                <div class="alert alert-error">Invalid username or password</div>
            </div>
            <div class="inputwrapper">
                <input type="text" name="user_name" id="username" placeholder="Enter  username" />
            </div>
            <div class="inputwrapper">
                <input type="password" name="user_password" id="password" placeholder="Enter  password" />
            </div>
            <div class="inputwrapper">
                <button name="submit" type="submit" id="submit">Sign In</button>
            </div>
            <div class="inputwrapper">
                
            </div>
            
      </form>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->

<div class="loginfooter">
   
</div>

</body>
</html>


