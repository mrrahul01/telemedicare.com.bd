<?php 
	session_start();
	require 'link.php';
	if (isset($_SESSION['patient_phone'])) 
	{
		$patient_name = $_SESSION['patient_name'];
		$patient_id = $_SESSION['patient_id'];
		$patient_profile_pic = $_SESSION['patient_profile_pic'];
	}
	else
	{
		header("location:index.php");
		exit();
		session_destroy();
	}
	
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title> Online Doctor Appoinment </title>
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
            <?php require 'patient_side_nav.php'; ?>
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
						<span>Health Card</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				<div class="search-box">
			
				</div><!--//end-search-box-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									
									<div class="user-name">
										<p> <?php   echo ucwords($_SESSION['patient_name']); ?> </p>
										<span>Patient</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="patient_logout.php?patient_lgot=<?php echo $_SESSION['patient_id']; ?>">
								<i class="fa fa-sign-out"></i> Logout</a> </li>
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
				<h1 style="font-size: 240%;color: #4d9900;font-weight: bold;"><center>Welcome to Telemedicare Health Card Service.</center></h1><br>
				<h4 style="color: black;"><center>Here You Can See All of Your Information and <span>Manage Your Personal Information.</span></center></h4><br>
					<div class="col-md-12 ">
				<div class="col-md-6 ">
						<h4 class="title3">Profile</h4>
					<?php 
							 	$sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
							 	while ($num = mysql_fetch_array($sql)) 
							 	{
							  ?>
						<div class="profile-top">
							<img src="../admin/patient_image/<?php echo $_SESSION['patient_profile_pic']; ?>" height="130px" width="130px" alt="">
							<h4><?php echo $num['patient_name']; ?></h4>
							<h4>Package: <?php echo $num['Package']; ?></h4>
						</div>
						</div>
						
						<div class="col-md-6 ">
						<div class="profile-text">
							<div class="profile-row">
								<div class="profile-left">
									<i class="fa fa-envelope profile-icon"></i>
								</div>
								<div class="profile-right">
									<h4 style="color: black;"><?php echo $num['email']; ?></h4>
									<p>Email</p>
								</div> 
								<div class="clearfix"> </div>	
							</div>
							<div class="profile-row row-middle">
								<div class="profile-left">
									<i class="fa fa-mobile profile-icon"></i>
								</div>
								<div class="profile-right">
									<h4 style="color: black;"><?php echo $num['patient_phone']; ?></h4>
									<p>Contact Number</p>
								</div> 
								<div class="clearfix"> </div>	
							</div>

							<div class="profile-row">
								<div class="profile-left">
									<i class="fa fa-map-marker"></i>
								</div>
								<div class="profile-right">
									<h4 style="color: black;"><?php echo $num['paddress']; ?></h4>
									<p>Present Address</p>
								</div> 
								<div class="clearfix"> </div>	
							</div>
							<br>
							
							<div class="profile-row">
								<div class="profile-left">
									<i class="fa fa-calendar"></i>
								</div>
								<div class="profile-right">
								<h4 style="color: #4d9900;"><?php $phpdate = strtotime( $num['admid_date'] );
								$mysqldate = date( 'd-m-Y', $phpdate );
								echo  $mysqldate;?></h4>	



									<!-- <h4><?php echo $num['admid_date']; ?></h4> -->
									<h4 style="color: #6164c1;"><b>Date Of Buying This Card<b></h4>
								</div> 
								<div class="clearfix"> </div>	
							</div>
								
							</div>
								
								
								</div>


						

						<div class="profile-btm">
							<ul>
								<li>
									<h4><?php $phpdate = strtotime( $num['first_chkup'] );
								$mysqldate = date( 'd-m-Y', $phpdate );
								echo  $mysqldate;?></h4>
									<h5>1st Check Up Date</h5>
								</li>
								<li>
									<h4><?php $phpdate = strtotime( $num['sesond_chkup'] );
								$mysqldate = date( 'd-m-Y', $phpdate );
								echo  $mysqldate;?></h4>
									<h5>2nd Check Up Date</h5>
								</li>
								<li>
									<h4><?php $phpdate = strtotime( $num['third_chkup'] );
								$mysqldate = date( 'd-m-Y', $phpdate );
								echo  $mysqldate;?></h4>
									<h5>3rd Check Up Date</h5>
								</li>
							</ul>
						</div>
							<br>
							<center><h2 style="color: red;"><b>Validity Of This Card : <?php $phpdate = strtotime( $num['Validity_Date'] );
								$mysqldate = date( 'd-m-Y', $phpdate );
								echo  $mysqldate;?><b></h2></center><br>
							<center><h3 style="color: #061e44;"><b>Your Requested Hospital is <?php 
								
					echo $num['reqhospital']?></b></h3></center>	
								<?php } ?>	
<!--
								<br>
								<br>
								<br>
								<center> <h4>Copyright &copy; Telemedicare.com.bd</h4>  </center> <br>
-->
					</div>
					
					<div class="clearfix"> </div>	
				</div>
		</div>
		<!--footer-->

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