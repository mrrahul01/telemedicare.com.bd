<?php
	@ob_start(); 
	session_start();
	require 'link.php';
	if (isset($_SESSION['admin_id'])) 
	{
		$admin_id =  $_SESSION['admin_id'];
        $admin_name = $_SESSION['admin_name'];
	}
	else
	{
		header("location:index.php");
		exit();
	}
	
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title> Online Doctor's Appoinment </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--Calender-->
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
<script src="js/underscore-min.js" type="text/javascript"></script>
<script src= "js/moment-2.2.1.js" type="text/javascript"></script>
<script src="js/clndr.js" type="text/javascript"></script>
<script src="js/site.js" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
	<?php require 'admin_side_nav.php'; ?>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="dashboard.php">
						<h1>Telemedicare</h1>
						<span>Doctor Appoinment</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				
				
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->

					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<!-- <span class="prfil-img"><img src="images/a.png" alt=""> </span>  -->
									<div class="user-name">
										<p> <?php   echo ucwords($_SESSION['admin_name']); ?> </p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
							<!-- 	<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>  -->
								<li> <a href="admin_lgout.php?lgot=<?php echo $_SESSION['admin_id']; ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-left ">
							<h5>Total Register</h5>
							<h4>Doctor's</h4>
						</div>
						<div class="stats-right">
						
							<?php
								$result = mysql_query("SELECT COUNT(id) AS all_doc FROM new_doctor")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
						 ?>
							<label><?php echo $row['all_doc']; ?></label>
							<?php } ?>
						
						</div>
						<div class="clearfix"> </div>	
					</div>
			
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Speciality</h4>
						</div>
						<div class="stats-right">
										
							<?php
								$result = mysql_query("SELECT COUNT(speciality) AS spc FROM speciality")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
						 ?>
							<label><?php echo $row['spc']; ?></label>
							<?php } ?>
							
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Total Health Card</h5>
							<h4>Patients</h4>
						</div>
						<div class="stats-right">
										
							<?php
								$result = mysql_query("SELECT COUNT(patient_id) AS all_patient FROM new_patient")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
						 ?>
							<label><?php echo $row['all_patient']; ?></label>
							<?php } ?>
							
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="clearfix"> </div>	
				</div>


				<div class="row-one">
					<div class="col-md-4 widget">
						<div class="stats-left ">
							<h5>Total Register</h5>
							<h4>Promotion's</h4>
						</div>
						<div class="stats-right">
						
							<?php
								$result = mysql_query("SELECT COUNT(id) AS all_pro FROM promoregistration")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
						 ?>
							<label><?php echo $row['all_pro']; ?></label>
							<?php } ?>
						
						</div>
						<div class="clearfix"> </div>	
					</div>
			
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Total</h5>
							<h4>Test</h4>
						</div>
						<div class="stats-right">
										
							<?php
								$result = mysql_query("SELECT COUNT(id) AS spc FROM health_test")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
						 ?>
							<label><?php echo $row['spc']; ?></label>
							<?php } ?>
							
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="col-md-4 widget states-last">
						<div class="stats-left">
							<h5>Total Registered</h5>
							<h4>Test Member's</h4>
						</div>
						<div class="stats-right">
										
							<?php
								$result = mysql_query("SELECT COUNT(id) AS all_test FROM chkup_test")or die(mysql_error());
					          while($row = mysql_fetch_array( $result )) {
						 ?>
							<label><?php echo $row['all_test']; ?></label>
							<?php } ?>
							
						</div>
						<div class="clearfix"> </div>	
					</div>
					<div class="clearfix"> </div>	
				</div>


				<div class="row">
					<div class="col-md-12 map widget-shadow">
						<b><h4 class="title" style="color: #4f52ba;font-size: 300%;"> <b>Welcome ! <?php   echo ucwords($_SESSION['admin_name']); ?> To your Panel</b> </h4>

						<h2 style="color:red"><b>	<?php 
					$sql = mysql_query("SELECT SUM(paymentchkup) AS total_payment FROM `chkup_test`") ;
					$row = mysql_fetch_array($sql);
					$a= $row['total_payment'];

					$sql1 = mysql_query("SELECT SUM(payment) AS total_payment FROM `new_patient`") ;
					$row1 = mysql_fetch_array($sql1);
					$a1= $row1['total_payment'];
					$b= $a1 - ((80*$a1)/100);
					$sql2 = mysql_query("SELECT SUM(fees) AS total FROM `confirm_appointment`") ;
					$row2 = mysql_fetch_array($sql2);
					$a2= $row2['total'];
					$b1= $a2 - ((80*$a2)/100);

					$c =  $a+ $b + $b1;
					
					echo "Total Payments from ChackUp & Test, Health card and Appoinment: ".$c; ?> </b></h2>
		
					</div>
					<div class="col-md-4">
							
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p> &copy; 2016 All Rights Reserved </p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>