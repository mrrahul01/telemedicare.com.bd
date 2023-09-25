<?php 
	session_start();
	require 'link.php';
	if (isset($_SESSION['docid'])) 
	{
		$docname = $_SESSION['docname'];
		$docid = $_SESSION['docid'];
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
				<?php require 'doctor_side_nav.php'; ?>
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
										<p> <?php   echo ucwords($_SESSION['docname']); ?> </p>
										<span>Doctor</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<!-- <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
								<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>  -->
								<ul class="dropdown-menu drp-mnu">
								<li> <a href="doc_logout.php?dclgot=<?php echo $_SESSION['docid']; ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
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
				<div class="tables">
					<div class="table-responsive bs-example widget-shadow">
						<h4 class="title1"> Your Profile Detail </h4>
						<table class="table table-bordered"> 
						<?php 
							 	$sql = mysql_query("SELECT * FROM new_doctor WHERE id='".$_SESSION['docid']."'");
							 	while ($num = mysql_fetch_array($sql)) 
							 	{
							  ?>
								 	 <span class="docprofle"> Doctor Name </span> : <?php echo $num['doc_name']; ?> <br />
								 	  <span class="docprofle"> Designation </span> : <?php echo $num['designation']; ?> <br />
								 	  <span class="docprofle"> Speciality </span> : <?php echo $num['speciality']; ?> <br />
								 	  <span class="docprofle"> Gender </span> : <?php echo $num['gender']; ?> <br />
								 	  <span class="docprofle"> Email </span> : <?php echo $num['email']; ?> <br />
								 	  <span class="docprofle"> Doctor Phone </span> : <?php echo $num['doc_phone']; ?> <br />
								 	  <span class="docprofle"> Description </span> : <?php echo $num['description']; ?> <br />
								 	  <span class="docprofle"> Country </span> : <?php echo $num['country']; ?> <br />
								 	  <span class="docprofle"> City </span> : <?php echo $num['city']; ?> <br />
								 	  <span class="docprofle"> Area </span> : <?php echo $num['area']; ?>  <br />
								 	  <span class="docprofle"> Notification To  </span> : <?php echo $num['notify_to']; ?> <br />
								 	  <span class="docprofle"> New Patient Fess </span> : <?php echo $num['new_p_f']; ?> <br />
								 	  <span class="docprofle"> Return Patient Fees </span> : <?php echo $num['return_p_f']; ?> <br />
								 	  <span class="docprofle"> Report Follow Up Fees </span> : <?php echo $num['report_f_f']; ?> <br />
								 	  <span class="docprofle"> First Chamber Address </span> : <?php echo $num['first_cm_address']; ?> <br />
								 	  <span class="docprofle">  Second Chamber Address </span> : <?php echo $num['second_cm_address']; ?> <br />
								 	  <span class="docprofle">  Third Chamber Address </span> : <?php echo $num['third_cm_address']; ?> <br />
								 	  <a href="edit_doctor_info.php?edinfo=<?php echo $num['id']; ?>" class="btn btn-xs btn-success"> Edit Profile </a> 
						<?php } ?>
						
						</table> 
					</div>
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