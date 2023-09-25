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
		<!-- 			<form class="input">
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
								<li> <a href="doc_logout.php?dclgot=<?php echo $_SESSION['docid']; ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
							<h4>Add Appointment Schedule </h4>
						</div>
						<div class="form-body">
							<form action="" method="post"> 
							<?php if (isset($_REQUEST['submit'])) 
							{
								$docid = $_SESSION['docid'];
								$day = $_REQUEST['day'];
								$apntime = $_REQUEST['apntime'];

								$sql = mysql_query("INSERT INTO apoin_schedule(docid,day,apntime,apndate)values('".$docid."','".$day."','".$apntime."',NOW())");
								if ($sql) 
								{
									echo "<div class='alert alert-success'> New Schedule Submited </div>";
								}
								else
								{
									echo "<div class='alert alert-success'> Wrong Information </div>";
								}
							} ?>
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Selecet Day </label>
										<select name="day" id="selector1" class="form-control1">
											<option> Select Day </option>
										       <?php 
								                    $query = mysql_query("SELECT * FROM day");
								                    while ($result = mysql_fetch_array($query)) 
								                    {
								                        echo '<option value="'.$result["day"].'">'.$result["day"].'</option>';    
								                    }
								                ?>
										</select>
									</div>
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1"> Set Appointment Time  </label>
										<select name="apntime" id="selector1" class="form-control1">
											<option> Select Appointment Time </option>
										       <?php 
								                    $query = mysql_query("SELECT * FROM apoin_time");
								                    while ($result = mysql_fetch_array($query)) 
								                    {
								                        echo '<option value="'.$result["appoinment_time"].'">'.$result["appoinment_time"].'</option>';    
								                    }
								                ?>
										</select>
								</div> 
								 <button type="submit" name="submit" class="btn btn-default">Submit</button>
							 </form> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2016 All Rights Reserved</p>
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