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
				<div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h5 style="font-size: 200%; color: #4f52ba;"> You Can Edit Patient's Date Information</h5>
						</div>
						<div class="form-body">
							<form action="" method="post" enctype="multipart/form-data"> 
								<?php 
								$query = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_GET['editdateinfo']."'");
								$result = mysql_fetch_assoc($query);
								if (isset($_REQUEST['submit'])) 
								{
									
									
									$admid_date = $_REQUEST['admid_date'];
									$first_chkup = $_REQUEST['first_chkup'];
									$sesond_chkup = $_REQUEST['sesond_chkup'];
									$third_chkup = $_REQUEST['third_chkup'];
									$Validity_Date = $_REQUEST['Validity_Date'];
									// $first_cm_address = $_REQUEST['first_cm_address'];
									// $second_cm_address = $_REQUEST['second_cm_address'];
									// $third_cm_address = $_REQUEST['third_cm_address'];
								
									$upsql =mysql_query("UPDATE new_patient SET  admid_date= '$admid_date', first_chkup= '$first_chkup',sesond_chkup= '$sesond_chkup',third_chkup= '$third_chkup' ,Validity_Date= '$Validity_Date' WHERE patient_id='".$_REQUEST['editdateinfo']."'");
									if ($upsql) 
									{
										echo "<div class='alert alert-success'> Your Profile Updated </div>";
										// header("location:view_all_speciality.php");
									}
									else{	echo "<div class='alert alert-success'> False info no update </div>";}
								}
								?>
								
								
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Date Of Patient Registration </label>
									<input type="date" name="admid_date" class="form-control" value="<?php echo $result['admid_date']; ?>">
									</div>
								</div>


								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Date Of Patient First ChechUp </label>
									<input type="date" name="first_chkup" class="form-control" value="<?php echo $result['first_chkup']; ?>">
									</div>
								</div>


								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Date Of Patient Second ChechUp </label>
									<input type="date" name="sesond_chkup" class="form-control" value="<?php echo $result['sesond_chkup']; ?>">
									</div>
								</div>


								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Date Of Patient Third ChechUp </label>
									<input type="date" name="third_chkup" class="form-control" value="<?php echo $result['third_chkup']; ?>">
									</div>
								</div>


								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Date Of Patient's Validity </label>
									<input type="date" name="Validity_Date" class="form-control" value="<?php echo $result['Validity_Date']; ?>">
									</div>
								</div>
								
								
								</div>
								<!-- <div class="form-group"> 
									<label for="exampleInputName"> Return Patient Fees </label>
									 <input type="text" name="return_p_f" class="form-control" value="<?php echo $result['return_p_f']; ?>">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputName"> Report Follow Up Fees</label>
									 <input type="text" name="report_f_f" class="form-control" value="<?php echo $result['report_f_f']; ?>">
								</div> 

								<label for="exampleInputName"> Consultation Center </label>

								<div class="form-group"> 
									<label for="exampleInputName"> First Chamber </label>
									 <input type="text" name="first_cm_address" class="form-control" value="<?php echo $result['first_cm_address']; ?>">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputName"> Second Chamber </label>
									 <input type="text" name="second_cm_address" class="form-control" value="<?php echo $result['second_cm_address']; ?>">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputName"> Third Chamber </label>
									 <input type="text" name="third_cm_address" class="form-control" value="<?php echo $result['third_cm_address']; ?>">
								</div>  -->
							
								 <button type="submit" name="submit" class="btn btn-default">Submit</button>
							 </form> 
						</div>
					<div class="footer" style="font-size: 100%;">
		   <p> &copy; 2016 All Rights Reserved </p>
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