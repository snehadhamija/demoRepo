<?php include("api.php") ;
	echo "testing";
	$response = api::call();
?> 
<!DOCTYPE HTML>
<html>
<?php include("HEAD.PHP"); ?>
<body>
	<!-- header-section-starts -->
   
     <?php include("top-nav.php"); ?>
		
	<div class="full">
    <div class="col-md-3 top-nav">
			<?php include("left-nav.php"); ?>
		<!--banner-section-->
	<div class="col-md-9 main">
		<?php include("banner.php"); ?>
			<!--//banner-section-->
			 <?php include("bottam.php"); ?>
					<!--//top-news-->
		     
			<?php include("news.php"); ?>
			<div class="clearfix"> </div>
	<!--/footer-->
	<?php include("footer.php"); ?>
	
	     
