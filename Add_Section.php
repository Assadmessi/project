<?php
include('connect.php');
include('function.php');

if (isset($_REQUEST['Mode'])) 
{
	$SectionID=$_GET['SectionID'];

	$query="SELECT * FROM section WHERE SectionID='$SectionID'";
	$ret=mysql_query($query);
	$Sectionrow=mysql_fetch_array($ret);

	$SectionID=$Sectionrow['SectionID'];
	$SectionID=$Sectionrow['SectionID'];
	$LevelID=$Sectionrow['LevelID'];
	$RoomID=$Sectionrow['RoomID'];
	$TeacherID=$Sectionrow['TeacherID'];
	$StartDate=$Sectionrow['StartDate'];
	$EndDate=$Sectionrow['EndDate'];
	$SectionTime=$Sectionrow['SectionTime'];


}

if (isset($_POST['btnupdate'])) 
{
		$SectionID=$_POST['txtSecID'];
		$LevelID=$_POST['txtLID'];
		$RoomID=$_POST['txtRID'];
		$TeacherID = $_POST['txtTID'];
		$StartDate = date("Y-m-d",strtotime($_POST['txtSD']));
		$EndDate=date("Y-m-d",strtotime($_POST['txtED']));
		$SectionTime=$_POST['txtST'];

		$query="UPDATE section 
				SET LevelID='$LevelID',
				RoomID='$RoomID', 
				TeacherID ='$TeacherID', 
				StartDate ='$StartDate',
				EndDate='$EndDate',
				SectionTime='$SectionTime' 
				WHERE SectionID='$SectionID'
				";
		$ret=mysql_query($query);
		if ($ret) {
			echo "<script>window.alert('succcessfully update')</script>";
			echo "<script>window.location='Add_Section.php'</script>";
		}
		else{
			echo mysql_error();
		}
}

function delete()
{
	

	$SectionID=$_GET['SectionID'];
	$sql="DELETE FROM section 
			where SectionID='$SectionID'";
	$ret=mysql_query($sql);
	if ($ret) 
	{
		echo "<script>window.alert('succcessfully Delete')</script>";
		echo "<script>window.location='Add_Section.php'</script>";
		}
	else
	{
		echo "something wrong".mysql_error();
	}

}

if(isset($_POST['btnsubmit']))
{
$SectionID=AutoID('Section','SectionID','SecID-',6);
$LevelID=$_POST['txtLID'];
$RoomID=$_POST['txtRID'];
$TeacherID=$_POST['txtTID'];
$StartDate=date("Y-m-d",strtotime($_POST['txtSD']));
$EndDate=date("Y-m-d",strtotime($_POST['txtED']));
$SectionTime=$_POST['txtST'];


$check="SELECT * FROM section 
	WHERE SectionTime='$SectionTime'";
$checkret=mysql_query($check);
$count=mysql_num_rows($checkret);

if ($count<>0) 
{
	echo "<script>window.alert('Section Time Already Exists')</script>";
	echo "<script>window.location='Add_Section.php'</script>";
}
else
{
	$insert="INSERT INTO section (SectionID,LevelID,RoomID,TeacherID,StartDate,EndDate,SectionTime) VALUES ('$SectionID','$LevelID','$RoomID','$TeacherID','$StartDate','$EndDate','$SectionTime')";
	$insertret=mysql_query($insert);
	if ($insertret) 
	{
		echo "<script>window.alert('Section Successful Insterted!')</script>";
		echo "<script>window.location='Add_Section.php'</script>";
	}
	else
	{
		echo "<p>Error in Section Registration Page:".mysql_error()."</p>";
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
							<li class="active"><a href="Admin_Registration.php" data-hover="Home">Home</a></li>
							<li><a href="Login.php" data-hover="About Us">Login</a></li>
							<li class="dropdown menu__item">
								<a href="#" class="dropdown-toggle menu__link"  data-toggle="dropdown" data-hover="Pages" role="button" aria-haspopup="true" aria-expanded="false">Pages<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="Add_Course.php">Course Registration</a></li>
									<li><a href="Add_Level.php">Levlel Registration</a></li>
									<li><a href="Add_Room.php">Room Registration</a></li>
									<li><a href="Add_Section.php">Section Registration</a></li>
									<li><a href="Teacher_Registration.php">Teacher Registration</a></li>
									<li><a href="Enroll_Confirm.php">Enroll Confirm</a></li>
									<li><a href="Attendance.php">Attdence</a></li>
									<li><a href="AttendenceReport.php">Attdence Report</a></li>
									<li><a href="Admin_Registration.php">Admin Registration</a></li>
								</ul>
							</li>
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
	<h3 class="tittle-agileits-w3layouts">Section Registration</h3>
	</div>
		<div class="col-md-9 test-gr">
					<div class=" test-gri1">
					 <div id="owl-demo2" class="owl-carousel">
						<form action="Add_Section.php" method="post">
<fieldset>
	<legend>Enter Section Information Here</legend>
<table>
<tr>
	<td>			
	<input type="hidden" name="txtSecID" value="<?php echo $SectionID  ?>" required/>
	</td>
</tr>
<tr>
	<td>Level ID</td>

	<td>
		<select name="txtLID" class="Textbox1">
			<option>-- Choose Level --</option>
				<?php
					$all="select * from Level";
					$ret=mysql_query($all);
					$count=mysql_num_rows($ret);

					for ($i=0; $i < $count; $i++) 
					{ 
					$row=mysql_fetch_array($ret);
					$LevelID=$row['LevelID'];
					$LevelName=$row['LevelName'];

					echo "<option value='$LevelID'>$LevelID - $LevelName</option>";
					}
				?>
		</select>

	</td>
</tr>
<tr>
	<td>Room ID</td>
	<td>
		<select name="txtRID" class="Textbox1">
			<option>-- Choose Room --</option>
				<?php
					$all="select * from room";
					$ret=mysql_query($all);
					$count=mysql_num_rows($ret);

					for ($i=0; $i < $count; $i++) 
					{ 
					$row=mysql_fetch_array($ret);
					$RoomID=$row['RoomID'];

					echo "<option value='$RoomID'>$RoomID </option>";
					}
				?>
		</select>

	</td>
</tr>
<tr>
	<td>Teacher ID</td>
	<td>
		<select name="txtTID" class="Textbox1">
			<option>-- Choose Teacher --</option>
				<?php
					$all="select * from teacher";
					$ret=mysql_query($all);
					$count=mysql_num_rows($ret);

					for ($i=0; $i < $count; $i++) 
					{ 
					$row=mysql_fetch_array($ret);
					$TeacherID=$row['TeacherID'];
					$TeacherName=$row['TeacherName'];

					echo "<option value='$TeacherID'>$TeacherID - $TeacherName</option>";
					}
				?>
		</select>

	</td>
</tr>
<tr>
	<td>Start Date</td>
	<td>
		<input type="text" name="txtSD" value="<?php echo date('d-M-Y');?>" onFocus="showCalender(calender,this)" required/>
	</td>
</tr>
<tr>
	<td>End Date</td>
	<td>
		<input type="text" name="txtED" value="<?php echo date('d-M-Y');?>" onFocus="showCalender(calender,this)" required/>
	</td>
</tr>
<tr>
	<td>Section Time</td>
	<td>
		<input type="text" name="txtST" placeholder="Enter Section Time Here" required/>
	</td>
</tr>
<tr>
			<td></td>
			<td>
				<?php
				if (isset($_REQUEST['Mode'])) 
					{
							
						 $action=$_REQUEST['Mode'];

						if ($action=='delete') 
						{
							
							delete();
						}

						else if ($action='update') 
						{
							echo "<input type='submit' name='btnupdate' value='Update' />";
						}
						
					}
					else
					{
						echo "<input type='submit' name='btnsubmit' value='Save' />";	
					}
					
					

				
				?>
				<input type="reset" value="Clear" class="btn"/>
			</td>
		</tr>
</table>

<table>
<tr>
	<th>Section ID</th>
	<th>Level ID</th>
	<th>Room ID</th>
	<th>Teacher ID</th>
	<th>Start Date</th>
	<th>End Date</th>
	<th>Section Time</th>
</tr>
<?php 
	$select="SELECT * FROM section
			ORDER BY SectionID";
	$ret=mysql_query($select);
	$count=mysql_num_rows($ret);
	
	for($i=0;$i<$count;$i++)
	{
		$row=mysql_fetch_array($ret);
		$SectionID=$row['SectionID'];
		$LevelID=$row['LevelID'];
		$RoomID=$row['RoomID'];
		$TeacherID=$row['TeacherID'];
		$StartDate=$row['StartDate'];
		$EndDate=$row['EndDate'];
		$SectionTime=$row['SectionTime'];

	echo "<tr>
		<td>$SectionID</td>
		<td>$LevelID</td>
		<td>$RoomID</td>
		<td>$TeacherID</td>
		<td>$StartDate</td>
		<td>$EndDate</td>
		<td>$SectionTime</td>";
	echo "<td><a href='Add_Section.php?SectionID=$SectionID&Mode=update'>Edit</a>
	<a href='Add_Section.php?SectionID=$SectionID&Mode=delete'>Delete</a></td></tr>";
}
	?>
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