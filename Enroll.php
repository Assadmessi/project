<?php
session_start();
include('connect.php');
include('function.php');
if(isset($_SESSION['StudentID']))
{
	$StudentID = $_SESSION['StudentID'];
	$StudentName = $_SESSION['StudentName'];
	
}
else
{
	echo "<script>window.location='Student_login.php'</script>";
}

if(isset($_GET['LevelID']))
{
	$LevelID=$_GET['LevelID'];

	$level_Sel="SELECT * from Level
				Where LevelID='$LevelID'";

	$l_ret=mysql_query($level_Sel);
	$l_count=mysql_num_rows($l_ret);
	$l_row=mysql_fetch_array($l_ret);

	 $Fees=$l_row['Fees'];
}



if(isset($_POST['btnsubmit']))
{
	$EnrollID=AutoID('Enroll','EnrollID','EID-',6);
	//$StudentID=$_POST['txtSID'];
	$Section=$_POST['txtSecID'];
	$Date=date("Y-m-d",strtotime($_POST['txtDate']));
	$TotalAmount=$_POST['txtTA'];
	$DepositAmount=$_POST['txtDA'];
	$PaymentType=$_POST['rdoPT'];
	

	if($_POST['bankcard']=='')
	{
		$bankcard='Not Paid With Card';
	}
	else
	{
		$bankcard=$_POST['bankcard'];
	}


	 $insert="INSERT INTO Enroll (EnrollID,StudentID,SectionID,Date,TotalAmount,DepositAmount,PaymentType,bankcard,Status) VALUES ('$EnrollID','$StudentID','$Section','$Date','$TotalAmount','$DepositAmount','$PaymentType','$bankcard','Uncomplete')";

	$insertret=mysql_query($insert);
	if ($insertret) 
	{
		echo "<script>window.alert('Enroll Successful Insterted!')</script>";
		echo "<script>window.location='Course_Display.php'</script>";
	}
	else
	{
		echo "<p>Error in Enroll Registration Page:".mysql_error()."</p>";
	}
}


?>

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
<!--<link href="Helper/DatePicker/datepicker.css" rel="stylesheet" type="text/css" />
    <script src="Helper/DatePicker/datepicker.js" type="text/jscript"></script>
	<script src="jquery.php"></script>-->

	<script>

	function deposit_cal()
	{

		var TotalAmount=document.getElementById("txtTA").value;
		
		var DepositAmount=TotalAmount/2;
		//alert('OK');
		 document.getElementById("txtDA").value = DepositAmount;

	}


	</script>

<script type="text/javascript">
	function show() 
	{ 
		document.getElementById('bankcard').style.display = 'block'; 
	}
	function hide() 
	{ 
		document.getElementById('bankcard').style.display = 'none'; 
	}
</script>

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
							<li><a href="Student_login.php" data-hover="About Us">Login</a></li>
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
	<h3 class="tittle-agileits-w3layouts">Enroll</h3>
	</div>
		<div class="col-md-9 test-gr">
					<div class=" test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
						<form action="Enroll.php" method="post">
	<table>
		<tr>

			<td ><input type="hidden" name="txtEID" value="<?php echo $row['EnrollID'];?>" ></td>
		</tr>
		<tr>
			<td>Student Name :</td>
			<td>
				<input type="text" disabled="" name="txtSN" placeholder="Enter Student Name Here" value="<?php echo $StudentName ?>"  required/>
			</td>
		</tr>
		<tr>
			<td>Section :</td>
			<td>
		<select name="txtSecID" class="Textbox1" >
			<option>-- Choose Section --</option>
				<?php
				echo	$all="select * from Section s, Level l 
						 Where l.LevelID=s.LevelID
						 And l.LevelID='$LevelID'";
					$ret=mysql_query($all);
					$count=mysql_num_rows($ret);

					for ($i=0; $i < $count; $i++) 
					{ 
					$row=mysql_fetch_array($ret);
					$SectionID=$row['SectionID'];
					$Time=$row['SectionTime'];

					echo "<option value='$SectionID'>$Time </option>";
					}
				?>
		</select>

	</td>
		</tr>
		<tr>
			<td>Date</td>
			<td>
				<input type="text"  name="txtDate" value="<?php echo date('d-M-Y');?>" onFocus="showCalender(calender,this)" required/>
			</td>
		</tr>
		<tr>
			<td>Total Amount</td>
			<td>
				<input type="text" name="txtTA" placeholder="Enter Total Amount Hrere" id="txtTA"  value="<?php echo $Fees ?>" readonly="true"/>
			</td>
		</tr>
		<tr>
			<td>Deposit Amount</td>
			<td>
				<input type="text" name="txtDA" id="txtDA" onclick="deposit_cal()" placeholder="Enter Deposit Amount Here" required/>
			</td>
		</tr>
		<tr> 
        <td>Payment Option :</td>
         <td>        
            <input type="radio" name="rdoPT" value="MyanPay" onClick="show();" /> MyanPay <br />
            <input type="radio" name="rdoPT" value="Visa/Master" onClick="show();"/> Visa/Master Card <br/>
            <br/>
         	<input type="text" class="textbox" size="30" id="bankcard" name="bankcard" placeholder="Bank Card Info" style="display:none">
         </td>
    </tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnsubmit" value="Submit"  />
				<input type="reset" value="Clear" class="btn"/>
			</td>
		</tr>

</table>
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