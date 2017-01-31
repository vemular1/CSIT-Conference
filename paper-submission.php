<?php 
include 'header.php'; 
?>

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



<?php
if(!empty($_SESSION['loged_user_email']) && !empty($_SESSION['loged_user_pass']))
								{
?>


									<form method="post" enctype="multipart/form-data" action="submit_paper.php">
									<input type="hidden" name="logged_user_id" value="<?php echo $_SESSION['loged_user_id']; ?>">
									<table class="art-article" style="width: 100%; ">
									<tbody><tr><td style="text-align: right; width: 34%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; ">
									<span style="font-size: 20px;">Paper Title</span></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2">
									<input type="text" placeholder="paper title" name="paper_title"><br></td><td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td>
									</tr><tr><td style="width: 34%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; "><br></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td></tr>
									<tr><td style="text-align: right; width: 34%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; ">
									<span style="font-size: 20px;">Author Name</span></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2">
									<input type="text" placeholder="Enter your name" name="author_name"><br></td><td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td>
									</tr><tr><td style="width: 34%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; "><br></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td></tr>
									<tr><td style="text-align: right; width: 34%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; ">
									<span style="font-size: 20px;">Affiliation</span></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2">
									<input type="text" Placeholder="Affiliation" name="affiliation"><br></td><td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td></tr>
									<tr><td style="width: 34%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; "><br></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td></tr>
									<tr><td style="width: 34%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; "><br></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td></tr>
									
									<td style="text-align: right; width: 34%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; ">
									<span style="font-size: 20px;">Upload Your Paper</span></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2">
									<input type="file"  name="upload_paper" ><br></td><td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td>
									</tr><tr><td style="width: 34%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; "><br></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; " colspan="2"><br></td></tr>
									
									<tr><td style="text-align: right; width: 34%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; ">
									<input type="submit" value="submit" style="margin-right: -80px;">&nbsp;<br></td><td style="width: 23%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; "><br></td>
									<td style="width: 33%; border-top-width: 0px; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; ">
									<br></td></tr></tbody></table>
									</form>

<?php
}
else
{
?>
<div style="text-align: center; font-size:25px;"> Please Log in first <a href= "reviewer-login.php" > Click here.. </a> </div>
<?php

}
?>


									<p><br></p><p><br></p><p><br></p><p><br></p><p><br>
                </p>
                <p>
                </p><p></p></div>
								
								
								
								</div>
                                
                

</article></div>
                    </div>
                </div>
            </div>
    </div>
	<?php include 'footer.php'; ?>