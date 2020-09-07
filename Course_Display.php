<?php
session_start();
include('connect.php');

?>


<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Scholar Vision an education Category Bootstrap Responsive website Template | Home :: w3layouts</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Scholar Vision Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->
<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-CSS --> <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- Font-awesome-CSS --> <link href="css/font-awesome.css" rel="stylesheet"> 
<!-- Flex-slider-CSS --><link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- Owl-carousel-CSS --><link href="css/owl.carousel.css" rel="stylesheet">
<!-- Index-Page-CSS --><link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom-Stylesheet-Links -->
<!--web-fonts-->
<!-- Headings-font --><link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
<!-- Body-font --><link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<!--//web-fonts-->
<!--//fonts-->
<!-- js -->
</head>

<body>
<!-- banner -->
<div class="banner" id="home">
	<div class="banner-overlay-agileinfo">
	<div class="top-header-agile">
		<h1><a class="col-md-4 navbar-brand" href="index.html">All Smile English School</a></h1>
		<div class="col-md-4 top-header-agile-right">
				
			</div>
			<div class="col-md-4 top-header-agile-left">
				<ul class="num-w3ls">
					<li><i class="fa fa-phone" aria-hidden="true"></i></li>
					<li>+959263137792</li>
				</ul>
				
					</div>
			
			<div class="clearfix"></div>
		</div>

		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-3" id="link-effect-3">
						<ul class="nav navbar-nav">
							<li class="active"><a href="Course_Display.php" data-hover="Home">Home</a></li>
							<li><a href="Login.php" data-hover="About Us">Login</a></li>
							<li><a href="Student_Registration.php" data-hover="Gallery">Registration</a></li>
							<li><a href="Logout.php" data-hover="Pages">Log out</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
			<div class="w3l_banner_info">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="wthree_banner_info_grid">
									<h3><span>Genius</span>Welcome to <br>scholar vision</h3>
									<p>Your child can be a genius</p>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3><span>Genius</span>Education <br>for everyone</h3>
									<p>Your child can be a genius</p>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3><span>Genius</span>Welcome to <br>scholar vision</h3>
									<p>Your child can be a genius</p>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3><span>Genius</span>Education <br>for everyone</h3>
									<p>Your child can be a genius</p>
								</div>
							</li>
						</ul>
					</div>
				</section>
						
			</div>			
		</div>
	</div>
</div>
<!-- //banner -->	
<!-- about -->

	<!-- //about -->

<!--/services-->
<div class="table">
	<div class="container">
	<div class="col-md-3 test-left-agileinfo">
	<h3 class="tittle-agileits-w3layouts">Course List</h3>
	</div>
		<div class="col-md-9 test-gr">
					<div class=" test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
										 <form action="Course_Display.php" method="post">
<fieldset>
	<legend>Available Course</legend>
<table>

<table id="producttable" boder="1"  cellspacing='40'/>
<tr>
	<th>Course Name</th>
</tr>
<?php 
	$select="SELECT * FROM Course
			ORDER BY CourseID";
	$ret=mysql_query($select);
	$count=mysql_num_rows($ret);
	
	for($i=0;$i<$count;$i++)
	{
		$row=mysql_fetch_array($ret);
		$CourseName=$row['CourseName'];
	echo "<tr>";
	echo"<td>$CourseName</td>";
	?>
	<td><a href='Course_Detail.php?CourseID=<?php echo $row['CourseID']?>'> Detail</a></td>
<?php
}
?>	
	<tr>
	
		</tr>
	</table>
</fieldset>
</form>
									</div>	
								</div>	
								</div>
								</div>
								</div>

								
<!-- //agile_testimonials -->
<!-- copy-right -->
			<div class="copyright-wthree">
				<p>&copy; 2017 Scholar Vision . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts </a></p>
			</div>
<!-- //copy-right -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

	
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- flexSlider -->
							<script defer src="js/jquery.flexslider.js"></script>
							<script type="text/javascript">
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
						  </script>
<!-- //flexSlider -->
<!-- requried-jsfiles-for owl -->
 <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo2").owlCarousel({
									        items : 1,
									        lazyLoad : false,
									        autoPlay : true,
									        navigation : false,
									        navigationText :  false,
									        pagination : true,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->
<!-- Countdown-Timer-JavaScript -->
			<script src="js/simplyCountdown.js"></script>
			<script>
				var d = new Date(new Date().getTime() + 948 * 120 * 120 * 2000);

				// default example
				simplyCountdown('.simply-countdown-one', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate()
				});

				// inline example
				simplyCountdown('.simply-countdown-inline', {
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					inline: true
				});

				//jQuery example
				$('#simply-countdown-losange').simplyCountdown({
					year: d.getFullYear(),
					month: d.getMonth() + 1,
					day: d.getDate(),
					enableUtc: false
				});
			</script>
		<!-- //Countdown-Timer-JavaScript -->


<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->


 <!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>