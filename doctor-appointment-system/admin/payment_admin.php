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
				<div class="tables">
					<div class="table-responsive bs-example widget-shadow">
						<h4 class="title1"> View All Apointment </h4>
						<h2><b style="color:red">The Admin will get 20% of Appointment fees from every Appointment !!!</b></h2><br>
					<h2><b>	<?php 
					$sql = mysql_query("SELECT SUM(fees) AS total FROM `confirm_appointment`") ;
					$row = mysql_fetch_array($sql);
					$a= $row['total'];
					$b= $a - ((80*$a)/100);
					echo "Total Payments from appointment: ".$b; ?> </b></h2><br>
						<table class="table table-bordered"> 
							<thead>
								 <tr> 
								 	 <th> Doctor Name </th> 
								 	 <th> Doctor Phone </th> 
								 	 <th> Appointment Time </th> 
								 	 <th> Appointment Date </th> 
								 	 <th> Patient Mobile Num </th> 
								 	 <th> Transition ID </th>
								 	 <th> Fees </th>
								 	 
								 	 
								 </tr>
							 </thead> 
							 <?php 
							 	$sql = mysql_query("SELECT cnap.*,nc.* FROM confirm_appointment AS cnap JOIN new_doctor AS nc WHERE nc.id=cnap.docid");
							 	while ($num = mysql_fetch_array($sql)) 
							 	{
							  ?>
							 <tbody> 
							 	<tr> 
							 		<td><?php echo $num['doc_name']; ?></td> 
							 		<td><?php echo $num['doc_phone']; ?></td> 
							 		<td><?php echo $num['apntime']; ?></td> 
							 		<td><?php echo $num['confm_date']; ?></td>
							 		<td><?php echo $num['mobile_num']; ?></td> 
							 		<td><?php echo $num['transition']; ?></td> 
							 		<td><?php echo $num['fees']; ?></td> 
							 		 


							 		
							 	</tr> 
						    </tbody> 

						    <?php 
						    
						    } ?>
						</table> 
						
					</div>
				</div>


				<button> <a href="pdf_payment_admin.php">Generate PDF</a>  </button>
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
