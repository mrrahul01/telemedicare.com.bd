

<?php 
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
<title>Online Doctor's Appoinment </title>
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
				<div class="search-box">
	<!-- 				<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
							</svg>
						</label>
					</form> -->
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
									<!-- <span class="prfil-img"><img src="images/a.png" alt=""> </span>  -->
									<div class="user-name">
										<p><?php echo ucwords($_SESSION['admin_name']); ?></p>
										<span>Admin</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<!-- <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
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
				<div class="tables" style="font-size: 120%;">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4 class="title1" style="font-size: 200%;color: #4f52ba;"> <b>Patient Profile Detail </b></h4>
						<table class="table table-bordered"> 
						<?php 
							 	$sql = mysql_query("SELECT * FROM chkup_test WHERE id= '".$_GET['detailsinfo']."'");
							 	while ($num = mysql_fetch_array($sql)) 
							 	{
							  ?>
								 	 
<!--
							  <div class="profile-top">
							<img src="../admin/patient_image/<?php echo $_SESSION['patient_profile_pic']; ?>" height="130px" width="130px" alt="">

							</div>
-->
								 	 <span class="docprofle" style="color: blue;"> Patient Name </span> : <?php echo $num['member_name']; ?> <br />
									<span class="docprofle" style="color: blue;"> Patient Phone Number : </span> : <?php echo $num['patient_phone']; ?> <br />
									<span class="docprofle" style="color: blue;"> Test Name </span> : <?php echo $num['test']; ?> <br />

									<!-- <span class="docprofle" style="color: blue;"> Checkup Name </span> : <?php echo $num['chkup']; ?> <br /> -->
									<span class="docprofle" style="color: blue;"> Age </span> : <?php echo $num['age']; ?> <br />
									<span class="docprofle" style="color: blue;"> Test Date </span> : <?php echo $num['testdate']; ?> <br />
									<span class="docprofle" style="color: blue;"> Test Time </span> : <?php echo $num['testtime']; ?> <br />
									<span class="docprofle" style="color: blue;"> Date of Barth </span> : <?php echo $num['barth']; ?> <br />

								 	  <span class="docprofle" style="color: blue;"> Country </span> : <?php echo $num['country']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> City </span> : <?php echo $num['city']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> Area </span> : <?php echo $num['area']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> Gender </span> : <?php echo $num['gender']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> Email </span> : <?php echo $num['email']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> Hospital Name : </span> : <?php echo $num['hospital']; ?> <br />
								 	  <!-- <span class="docprofle" style="color: blue;"> Report Delivery System : </span> : <?php echo $num['report']; ?> <br /> -->
								 	  <span class="docprofle" style="color: blue;"> Payment Method </span> : <?php echo $num['pmethod']; ?>  <br />
								 	  
								 	  <span class="docprofle" style="color: blue;"> Marital Status </span> : <?php echo $num['marital']; ?> <br />
								 	  
							
						<?php } ?>
						
						</table> 
						<div class="footer" >
		   <p> &copy; 2016 All Rights Reserved </p>
		</div>
					</div>
					
				</div>
			</div>
		</div>
		<!--footer-->
<!--
		<div class="footer">
		   <p> &copy; 2016 All Rights Reserved </p>
		</div>
-->
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