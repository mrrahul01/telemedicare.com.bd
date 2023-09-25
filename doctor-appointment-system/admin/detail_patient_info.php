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
							 	$sql = mysql_query("SELECT * FROM new_patient WHERE patient_id= '".$_GET['detailinfo']."'");
							 	while ($num = mysql_fetch_array($sql)) 
							 	{
							  ?>
								 	 
<!--
							  <div class="profile-top">
							<img src="../admin/patient_image/<?php echo $_SESSION['patient_profile_pic']; ?>" height="130px" width="130px" alt="">

							</div>
-->
								 	 <span class="docprofle" style="color: blue;"> Patient Name </span> : <?php echo $num['patient_name']; ?> <br />
									<span class="docprofle" style="color: blue;"> Package info </span> : <?php echo $num['Package']; ?> <br />
									<span class="docprofle" style="color: blue;"> Payment Method </span> : <?php echo $num['pmethod']; ?> <br />

									<span class="docprofle" style="color: blue;"> Requested Hospital </span> : <?php echo $num['reqhospital']; ?> <br />

									<span class="docprofle" style="color: blue;"> Date of Registration </span> : <?php echo $num['admid_date']; ?> <br />
									<span class="docprofle" style="color: blue;"> Date of First Check Up </span> : <?php echo $num['first_chkup']; ?> <br />
									<span class="docprofle" style="color: blue;"> Date of Second Check Up </span> : <?php echo $num['sesond_chkup']; ?> <br />
									<span class="docprofle" style="color: blue;"> Date of Third Check Up </span> : <?php echo $num['third_chkup']; ?> <br />
									<span class="docprofle" style="color: blue;"> Date of Validity </span> : <?php echo $num['Validity_Date']; ?> <br />

								 	  <span class="docprofle" style="color: blue;"> Present Address </span> : <?php echo $num['paddress']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> Permanent  Address</span> : <?php echo $num['peraddress']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> Gender </span> : <?php echo $num['gender']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> Email </span> : <?php echo $num['email']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> Patient Phone </span> : <?php echo $num['patient_phone']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> Work Phone </span> : <?php echo $num['work_phone']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> Date of Birth </span> : <?php echo $num['barth']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> Blood Group </span> : <?php echo $num['blood']; ?> <br />
								 	  <span class="docprofle" style="color: blue;"> Patient Height </span> : <?php echo $num['Height']; ?>  <br />
								 	  <span class="docprofle" style="color: blue;"> Patient Weight </span> : <?php echo $num['Weight']; ?> <br />
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