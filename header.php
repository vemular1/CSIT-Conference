<?php
include  'config.php';
?>
<!DOCTYPE html>
<?php $file= basename($_SERVER['PHP_SELF']); ?>
<html dir="ltr" lang="en-US"><head>
    <meta charset="utf-8">
    <title>Index</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
<meta name="description" content="Description">
<meta name="keywords" content="Keywords">


<style>.art-content .art-postcontent-0 .layout-item-0 { margin-bottom: 20px;  }
.art-content .art-postcontent-0 .layout-item-1 { padding-right: 15px;padding-left: 5px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
<header class="art-header">

    <div class="art-shapes">
        <div class="art-object396189628"></div>
<div class="art-object697531817"></div>

            </div>

<h1 class="art-headline">
    <a href="/">CSIT - 2016</a>
</h1>
<h2 class="art-slogan">World Congress</h2>





                        
                    
</header>
<nav class="art-nav">
    <div class="art-nav-inner">
    <ul class="art-hmenu"><li <?php if($file == "index.php"){ ?> class="active" <?php } ?>><a href="index.php" >Home</a></li>
	<li <?php if($file == "keynote-speaker.php"){ ?> class="active" <?php } ?>><a href="keynote-speaker.php">Keynote Speaker</a></li>
	<li <?php if($file == "call-for-paper.php"){ ?> class="active" <?php } ?>><a href="call-for-paper.php">Call for Paper</a></li>
	<li <?php if($file == "major-areas.php"){ ?> class="active" <?php } ?>><a href="major-areas.php">Major Areas</a></li>
	<li <?php if($file == "paper-submission.php"){ ?> class="active" <?php } ?>><a href="paper-submission.php">Paper Submission</a></li>
	<li <?php if($file == "conference-program.php"){ ?> class="active" <?php } ?>><a href="conference-program.php">Conference Program</a></li>
		<?php
		
		
								if(!isset($_SESSION['loged_user_email']) && !isset($_SESSION['loged_user_pass']))
								{
								?>
						 <li><a href="reviewer-login.php">
								Login  </a></li>
								<?php  } else { ?>
								
								<li><a href="logout.php">
								LOGOUT  </a> 
								<ul>
									<li> <a href="profile.php"> My Profile </a></li>
								</ul>
								</li>
								<?php } ?>
	
	</ul> 
        </div>
    </nav>