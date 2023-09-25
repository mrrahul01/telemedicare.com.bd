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
		header("location:login.php");
		exit();
		session_destroy();
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
										<p> <?php   echo ucwords($_SESSION['patient_name']); ?> </p>
										<span>Patient</span>
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
								<li> <a href="doc_logout.php?patient_lgot=<?php echo $_SESSION['patient_id']; ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
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

				<div class="tables" style="font-size: 110%;color: #006666;text-align: center;">
					<div class="table-responsive bs-example widget-shadow">
						<h4 class="title1" style="font-size: 200%;color: #006666;"> <center><b>Patient Basic Info</b> </center></h4>
						<table class="table table-bordered" style="text-align: center;"> 
						<?php 
							 	$sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
							 	while ($num = mysql_fetch_array($sql)) 
							 	{
							  ?>
								 	 
							  <div class="profile-top">
							<img src="../admin/patient_image/<?php echo $_SESSION['patient_profile_pic']; ?>" height="130px" width="130px" alt="">
							<?php } ?>
							<br>
							
							<thead style="text-align: center;">
								<br> <tr> 
								
									 <a href="edit_patient_info.php?editinfo=<?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['patient_id']; }?>" class="btn btn-xs btn-success"> Edit Profile <br>	 </a> <br>
									 
								
									 
								 	<br> <th style="text-align: center;"> Name </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['patient_name']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 
								 	 

								 	
								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Present Address </th>
								 	 <th><center><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['paddress']; }?>
										 </center></th>  
								 	 	</tr>
								 	  </thead> 




								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Permenant Address </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['peraddress']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 




								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Date of Birth </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['barth']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 



								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Gender </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['gender']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 



								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Email </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['email']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 



								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Patient Phone Number </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['patient_phone']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 


								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Work Phone Number </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['work_phone']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 



								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Blood  Group </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['blood']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 


								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Height </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['Height']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 


								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Weight </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['Weight']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 


								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Marital Status </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['marital']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 


								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Package Name</th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['Package']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 


								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Payment Method </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['pmethod']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 


								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Registration Date </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['admid_date']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 


								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> Validity Date </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['Validity_Date']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 


								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> First Checkup Date </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['first_chkup']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 

								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;">  2nd Checkup Date  </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['sesond_chkup']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 



								 	  <thead>
								 <tr> 
								 	 <th style="text-align: center;"> 3rd Checkup Date </th>
								 	 <th style="text-align: center;"><?php 
								 	 $sql = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_SESSION['patient_id']."'");
								 	 while ($num = mysql_fetch_array($sql)) 
							 	{
								 	 echo $num['third_chkup']; }?>
								 	 </th>  
								 	 	</tr>
								 	  </thead> 


							 
						</table> 
						
							</div>

				
				</div>

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