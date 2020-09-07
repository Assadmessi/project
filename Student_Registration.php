<?php
session_start();
include('connect.php');
include('function.php');

if(isset($_POST['btnsubmit']))
{
	if(strcmp($_SESSION['code'],$_POST['code'])!=0)
	{
	echo"<script>window.alert('Security does not match')</script>";
	}
else
{
$StudentID=AutoID('Student','StudentID','ASEC-',6);
$StudentName=$_POST['txtSN'];
$DOB=date("Y-m-d",strtotime($_POST['txtDOB']));

$today = date("Y-m-d");
$diff = date_diff(date_create($DOB), date_create($today));
$Age = $diff->format('%y');
$NRCNO=$_POST['txtNRCNO'];
$Gender=$_POST['rdoGender'];
$Education=$_POST['txtEducation'];
$WorkPlace=$_POST['txtWP'];
$OtherEnglishQualification=$_POST['txtOEQ'];
$ParentName=$_POST['txtPN'];
$Address=$_POST['txtAddress'];
$Phone=$_POST['txtPhone'];
$Email=$_POST['txtEmail'];
$Password=$_POST['txtPassword'];
$UserName=$_POST['txtUN'];

$Image=$_FILES['txtstudent']['name'];
$folder="studentimage/";
if ($Image) 
{
	$filename=$folder."_".$Image;
	$copied=copy($_FILES['txtstudent']['tmp_name'],$filename);
	if (!$copied) 
	{
			exist("Problem occured.Cannot Uploade Image."); 
		}	
}

$check="SELECT * FROM student WHERE UserName='$UserName'";
$checkret=mysql_query($check);
$count=mysql_num_rows($checkret);


if ($count<>0) 
{
	echo "<script>window.alert('User Name Already Exists')</script>";
}
else
{
	$insert="INSERT INTO student (StudentID,StudentName,DOB,Age,NRCNO,Gender,Education,WorkPlace,OtherEnglishQualification,ParentName,Address,Phone,Email,Password,UserName,Image) VALUES ('$StudentID','$StudentName','$DOB','$Age','$NRCNO','$Gender','$Education','$WorkPlace','$OtherEnglishQualification','$ParentName','$Address','$Phone','$Email','$Password','$UserName','$Image')";
	$insertret=mysql_query($insert);
	if ($insertret) 
	{
		echo "<script>window.alert('Student Account Created!')</script>";
		echo "<script>window.location='Student_Registration.php'</script>";
	}
	else
	{
		echo "<p>Error in Student Registration Page:".mysql_error()."</p>";
	}
}
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
<link href="script/DatePicker/datepicker.css" rel="stylesheet" type="text/css"/>

	<script src="script/DatePicker/datepicker.js" type="text/jscript"></script>
	<script type="text/javascript">
		
		function getAge() 
		{
		    var today = new Date();
		    //var birthDate = new Date(dateString);
		    var birthDate=document.getElementById("DOB").value;
		    alert(birthDate);  
		    var age = today.getFullYear() 	- birthDate.getFullYear();
		    var m = today.getMonth() - birthDate.getMonth();
		    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) 
		    {
		        age--;
		    }
		    alert(age);
		    document.getElementById("number").value = age;
		}

	</script>

	<script src="script/myanmar-nrc-x.js" type="text/jscript"></script>
	<script type="text/javascript">
var MMNRC = require('myanmar-nrc-x')

function checkNRCNO(NRCNO){
	var validity = false;
	try{
		var NRCNO = NRCNO(NRCNO);
		console.log(NRCNO.toMyaNum(12)) //၁၂
		console.log(NRCNO.toEngNum('၁၂')) //12
		console.log(nrc.getFormat()) // 12/OUKAMA(N)023456
		console.log(nrc.getFormat("mm")) // ၁၂/ဥကမ(နိုင်)၀၂၃၄၅၆
		console.log(nrc.getState()) // Yangon
		console.log(nrc.getState("mm")) // ရန်ကုန်တိုင်း
		validity = true;

	}catch(e){
	 console.log(e.message);
	 validity = false;
	}

	return validity;
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
	<h3 class="tittle-agileits-w3layouts">Student Registration</h3>
	</div>
		<div class="col-md-9 test-gr">
					<div class=" test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
						<form action="Student_Registration.php" onsubmit="return validate()" name="val" method="post" enctype="multipart/form-data">
							

		<table>
		<tr>
			<td>
				<input type="hidden" name="txtASEC" value="<?php echo $StudentID  ?>" required/>
			</td>
		</tr>
		<tr>
			<td>Student Name:</td>
			<td>
				<input type="text" name="txtSN" placeholder="Enter Name Here" required/>
			</td>
		</tr>
		<tr>
			<td>Date of Birth:</td>
			<td>
				<input type="text" name="txtDOB" value="<?php echo date('d-M-Y');?>" onFocus="showCalender(calender,this)" required/>
			</td>
		</tr>
		<tr>
			<td>NRC No :</td>
			<td>
				<input type="text" name="txtNRCNO" id="nrcno" placeholder="Enter your NRC NO Here" required/></div>
			</td>
		</tr>
		<tr>
			<td>Gender :</td>
			<td>
				<input type="radio" name="rdoGender" value="M" checked/>Male
				<input type="radio" name="rdoGender" value="F" checked/>Female
			</td>
		</tr>
		<tr>
			<td>Education :</td>
			<td>
				<input type="text" name="txtEducation" placeholder="Enter your Education Here" required/>
			</td>
		</tr>
		<tr>
			<td>Work Place :</td>
			<td>
				<input type="text" name="txtWP" placeholder="Enter your Work Place Here" required/>
			</td>
		</tr>
		<tr>
			<td>Other English Qualification :</td>
			<td>
				<input type="text" name="txtOEQ" placeholder="Enter your Other English Qualification Here" required/>
			</td>
		</tr>
		<tr>
			<td>Parent Name:</td>
			<td>
				<input type="text" name="txtPN" placeholder="Enter your Parent Name Here" required/>
			</td>
		</tr>
		<tr>
		<tr>
			<td>Address:</td>
			<td>
				<input type="text" name="txtAddress" placeholder="[No./Street/Township]" required/>
			</td>
		</tr>
			<td>Phone:</td>
			<td>
				<input type="text" name="txtPhone" placeholder="95+--------------" required/>
			</td>
		</tr>
		<tr>
			<td>User Email:</td>
			<td>
				<input type="email" name="txtEmail" placeholder="example@mail.com" required/>
			</td>
		</tr>
		<tr>
			<td>Password:</td>
			<td>
				<input type="password" name="txtPassword" placeholder="xxxxx" required/>
			</td>
		</tr>
		<tr>
			<td>User Name:</td>
			<td>
				<input type="text" name="txtUN" placeholder="aye001" required/>
			</td>
		</tr>
		<tr>
		<td>Image :</td>
		<td>
			<input type="file" name="txtstudent" value="<?php if (isset($Image)) {
				echo $Image;
			} else {$Image="";}?>" required/>
		</td>
		</tr>
		<!--important part-->
		<tr>
			<td colspan="2" align="center">
				<script type="text/javascript">
					jQuery(document).ready(function(){
						$('#refresh').tooltip('show');
						$('#refresh').tooltip('hide');
					})
				</script>
			<img src="generatecaptcha.php?rand=<?php echo rand();?>"id='captchaimg'/>
			<a href='javascript:refreshCaptcha();'><img src="images/icon.png" width="30" height="30"/></a>
			<script Language='JavaScript' type='text/javascript'>
				function refreshCaptcha()
				{
					var img=document.images['captchaimg'];
					img.src=img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
				}
			</script>
			</td>
		</tr>
		<!--End of the important part-->
		<tr>
			<td>Security Answer:</td>
			<td>
				<input type="text" name="code" id="code" placeholder="Enter Security Answer" required/>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" name="btnsubmit" value="Submit"  />
				<input type="reset" value="Clear" class="btn"/>
			</td>
		</tr>
		<tr>
			<td>Have Account?<a href="Student_Login.php">Log in</a></td>

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