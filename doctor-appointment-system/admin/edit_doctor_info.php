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
        <?php require 'admin_side_nav.php';  ?>
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
							<h4> Edit Doctor Information </h4>
						</div>
						<div class="form-body">
							<form action="" method="post" enctype="multipart/form-data"> 
								<?php 
								$query = mysql_query("SELECT * FROM new_doctor WHERE id='".$_GET['edinfo']."'");
								$result = mysql_fetch_assoc($query);
								if (isset($_REQUEST['submit'])) 
								{
									$doc_name = $_REQUEST['doc_name'];
									$designation = $_REQUEST['designation'];
									$speciality = $_REQUEST['speciality'];
									$gender = $_REQUEST['gender'];
									$email = $_REQUEST['email'];
									$doc_phone = $_REQUEST['doc_phone'];
									$description = $_REQUEST['description'];
									$country = $_REQUEST['country'];
									$city = $_REQUEST['city'];
									$area = $_REQUEST['area'];
									$notify_to = $_REQUEST['notify_to'];
									$new_p_f = $_REQUEST['new_p_f'];
									$return_p_f = $_REQUEST['return_p_f'];
									$report_f_f = $_REQUEST['report_f_f'];
									$first_cm_address = $_REQUEST['first_cm_address'];
									$second_cm_address = $_REQUEST['second_cm_address'];
									$third_cm_address = $_REQUEST['third_cm_address'];
									//$aapoin_time = $_REQUEST['apoin_time'];
									// $aapoin_time = implode(',', $_POST['apoin_time']);
									$upsql = mysql_query("UPDATE new_doctor SET doc_name='$doc_name', designation='$designation', speciality='$speciality', gender='$gender', email='$email', doc_phone='$doc_phone', description='$description', country='$country', city='$city', area='$area', notify_to='$notify_to', new_p_f='$new_p_f', return_p_f='$return_p_f', report_f_f='$report_f_f', first_cm_address='$first_cm_address', second_cm_address='$second_cm_address', third_cm_address='$third_cm_address' WHERE id='".$_REQUEST['edinfo']."'");
									if ($upsql) 
									{
										echo "<div class='alert alert-success'> Doctor Info Updated </div>";
										// header("location:view_all_speciality.php");
									}
									else{	echo "<div class='alert alert-success'> False info no update </div>";}
								}
								?>
								<div class="form-group"> 
									<label for="exampleInputName"> Name </label>
									 <input type="text" name="doc_name" class="form-control" value="<?php echo $result['doc_name']; ?>">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputEmail1"> Title/Designation *</label>
									 <input type="text" name="designation" class="form-control" value="<?php echo $result['designation']; ?>">
								</div> 
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Speciality *</label>
									 <input type="text" name="speciality" class="form-control" value="<?php echo $result['speciality']; ?>">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Gender </label>
										 <input type="text" name="gender" class="form-control" value="<?php echo $result['gender']; ?>">
									</div>
								</div>
							<!-- 	<div class="form-group"> 
									<label for="exampleInputEmail1"> Profile Image </label>
									 <input type="file" name="doc_profile_pic" id="exampleInputFile">
								</div>  -->
								<div class="form-group"> 
									<label for="exampleInputEmail1"> Email </label>
									 <input type="email" name="email" class="form-control" value="<?php echo $result['email']; ?>">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputNum"> Phone Number </label>
									 <input type="text" name="doc_phone" class="form-control" value="<?php echo $result['doc_phone']; ?>">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputNum"> Description </label>
									 <textarea rows="3" name="description" class="form-control1 control2" > <?php echo $result['description']; ?> </textarea>
								</div>
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Country </label>
									<input type="text" name="country" class="form-control" value="<?php echo $result['country']; ?>">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> City </label>
									<input type="text" name="city" class="form-control" value="<?php echo $result['city']; ?>">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Area </label>
									<input type="text" name="area" class="form-control" value="<?php echo $result['area']; ?>">
									</div>
								</div>
								<div class="form-group"> 
									<label for="exampleInputName"> Notification To </label>
									 <input type="text" name="notify_to" class="form-control" value="<?php echo $result['notify_to']; ?>">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputName"> New Patient Fees </label>
									 <input type="text" name="new_p_f" class="form-control" value="<?php echo $result['new_p_f']; ?>">
								</div> 
								<div class="form-group"> 
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
								</div> 
								<!-- <div class="form-group"> 
									<label for="exampleInputName"> Working Hour </label>
									 <input type="text" name="apoin_time" class="form-control" value="<?php echo $result['apoin_time']; ?>">
								</div>  -->

								<!-- <div class="form-group"> 
									<label for="exampleInputName"> Working Day </label>
									 <input type="text" name="apoin_time" class="form-control" value="<?php echo $result['apoin_time']; ?>">
								</div>  -->
								 <button type="submit" name="submit" class="btn btn-default">Submit</button>
							 </form> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>&copy; 2016 All Rights Reserved </p>
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
		<script type="text/javascript">
			$(document).ready(function() {

			$("#working-hour-box").hide();
			$("#wrk-hour").click(function(){
			$("#working-hour-box").show();
			});

			$("#working-day-box").hide();
			$("#wrk-day").click(function(){
			$("#working-day-box").show();
			});

			});
		</script>

		<script>
jQuery.fn.multiselect = function() {
    $(this).each(function() {
        var checkboxes = $(this).find("input:checkbox");
        checkboxes.each(function() {
            var checkbox = $(this);
            // Highlight pre-selected checkboxes
            if (checkbox.prop("checked"))
                checkbox.parent().addClass("multiselect-on");
 
            // Highlight checkboxes that the user selects
            checkbox.click(function() {
                if (checkbox.prop("checked"))
                    checkbox.parent().addClass("multiselect-on");
                else
                    checkbox.parent().removeClass("multiselect-on");
            });
        });
    });
};
</script>

	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>