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
										<p> <?php   echo ucwords($_SESSION['patient_name']); ?> </p>
										<span>Patient</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
						<ul class="dropdown-menu drp-mnu">
								<li> <a href="doc_logout.php?patient_lgot=<?php echo $_SESSION['patient_id']; ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
							<h4> You Can Edit Your Profile</h4>
						</div>
						<div class="form-body">
							<form action="" method="post" enctype="multipart/form-data"> 
								<?php 
								$query = mysql_query("SELECT * FROM new_patient WHERE patient_id='".$_GET['editinfo']."'");
								$result = mysql_fetch_assoc($query);
								if (isset($_REQUEST['submit'])) 
								{
									$patient_name = $_REQUEST['patient_name'];
									$patient_username = $_REQUEST['patient_username'];
									$patient_password = $_REQUEST['patient_password'];
									$paddress = $_REQUEST['paddress'];
									$peraddress = $_REQUEST['peraddress'];
									$email = $_REQUEST['email'];
									$patient_phone = $_REQUEST['patient_phone'];
									$work_phone = $_REQUEST['work_phone'];
									$blood = $_REQUEST['blood'];
									$Height = $_REQUEST['Height'];
									$Weight = $_REQUEST['Weight'];
									$marital = $_REQUEST['marital'];
									$barth = $_REQUEST['barth'];
									$reqhospital = $_REQUEST['reqhospital'];
									// $return_p_f = $_REQUEST['return_p_f'];
									// $report_f_f = $_REQUEST['report_f_f'];
									// $first_cm_address = $_REQUEST['first_cm_address'];
									// $second_cm_address = $_REQUEST['second_cm_address'];
									// $third_cm_address = $_REQUEST['third_cm_address'];
								
									$upsql =mysql_query("UPDATE new_patient SET patient_name='$patient_name',patient_username='$patient_username',patient_password='$patient_password', paddress='$paddress', peraddress='$peraddress', email='$email', patient_phone='$patient_phone', work_phone='$work_phone', blood='$blood', Height='$Height', Weight='$Weight', marital='$marital' , barth= '$barth', reqhospital= '$reqhospital'  WHERE patient_id='".$_REQUEST['editinfo']."'");
									if ($upsql) 
									{
										echo "<div class='alert alert-success'> Your Profile Updated </div>";
										// header("location:view_all_speciality.php");
									}
									else{	echo "<div class='alert alert-success'> False info no update </div>";}
								}
								?>
								<div class="form-group"> 
									<label for="exampleInputName"> Patient Name </label>
									 <input type="text" name="patient_name" class="form-control" value="<?php echo $result['patient_name']; ?>">
								</div>
								<div class="form-group"> 
									<label for="exampleInputName"> Patient Username </label>
									 <input type="text" name="patient_username" class="form-control" value="<?php echo $result['patient_username']; ?>">
								</div>
								<div class="form-group"> 
									<label for="exampleInputName"> Patient Password </label>
									 <input type="text" name="patient_password" class="form-control" value="<?php echo $result['patient_password']; ?>">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputEmail1"> Present Address </label>
									 <input type="text" name="paddress" class="form-control" value="<?php echo $result['paddress']; ?>">
								</div> 
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Permanent  Address </label>
									 <input type="text" name="peraddress" class="form-control" value="<?php echo $result['peraddress']; ?>">
									</div>
								</div>
								
								<div class="form-group"> 
								<div class="col-sm-">
									<label for="exampleInputEmail1"> Email </label>
									 <input type="email" name="email" class="form-control" value="<?php echo $result['email']; ?>">
								</div> 
								</div>
								<div class="form-group"> 
									<label for="exampleInputNum"> Patient Phone </label>
									 <input type="text" name="patient_phone" class="form-control" value="<?php echo $result['patient_phone']; ?>">
								</div> 


								<div class="form-group"> 
									<label for="exampleInputNum"> Work Phone </label>
									 <input type="text" name="work_phone" class="form-control" value="<?php echo $result['work_phone']; ?>">
								</div>


								
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Date of Birth </label>
									<input type="date" name="barth" class="form-control" value="<?php echo $result['barth']; ?>">
									</div>
								</div>


								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Blood Group </label>
									<input type="text" name="blood" class="form-control" value="<?php echo $result['blood']; ?>">
									</div>
								</div>


								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Patient Height </label>
									<input type="text" name="Height" class="form-control" value="<?php echo $result['Height']; ?>">
									</div>
								</div>


								<div class="form-group"> 
									<label for="exampleInputName"> Patient Weight </label>
									 <input type="text" name="Weight" class="form-control" value="<?php echo $result['Weight']; ?>">
								</div> 
								
								<div class="form-group">
								<div class="col-sm-">
									<label for="exampleInputName"> Marital Status </label>
									<select name="marital" id="selector1" class="form-control1">
									
    <option<?php if ($result['marital'] == "Married"): ?> selected="selected"<?php endif; ?>>Married</option>
    <option<?php if ($result['marital'] == "Unmarried"): ?> selected="selected"<?php endif; ?>>Unmarried</option>
    
</select>
								</div>
							</div>


								<div class="form-group">
								<div class="col-sm-">
								<label for="exampleInputName"> Select Hospital</label>
									<select name="reqhospital" id="selector1" class="form-control1">
										<option> Select Hospital  </option>
	<option<?php if ($result['reqhospital'] == "Ibn sina hospital sylhet"): ?> selected="selected"<?php endif; ?>>Ibn sina hospital sylhet</option>
    <option<?php if ($result['reqhospital'] == "Raj dental centre"): ?> selected="selected"<?php endif; ?>>Raj dental centre</option>
    <option<?php if ($result['reqhospital'] == "japan-bangladesh friendship hospital"): ?> selected="selected"<?php endif; ?>>japan-bangladesh friendship hospital</option>

    <option<?php if ($result['reqhospital'] == "Green hospital & diagnostic lab"): ?> selected="selected"<?php endif; ?>>Green hospital & diagnostic lab</option>
    <option<?php if ($result['reqhospital'] == "Gazipur clinic & diagnostic lab"): ?> selected="selected"<?php endif; ?>>Gazipur clinic & diagnostic lab</option>
    <option<?php if ($result['reqhospital'] == "Islami bank community hospital"): ?> selected="selected"<?php endif; ?>>Islami bank community hospital</option>
    <option<?php if ($result['reqhospital'] == "Care-first diagnostic solution"): ?> selected="selected"<?php endif; ?>>Care-first diagnostic solution</option>
    <option<?php if ($result['reqhospital'] == "Ahsanullah clinic"): ?> selected="selected"<?php endif; ?>>Ahsanullah clinic</option>
    <option<?php if ($result['reqhospital'] == "Northern private medical college & hospital"): ?> selected="selected"<?php endif; ?>>Northern private medical college & hospital</option>
    <option<?php if ($result['reqhospital'] == "Islami bank community hospital rangpur ltd"): ?> selected="selected"<?php endif; ?>>Islami bank community hospital rangpur ltd</option>
    <option<?php if ($result['reqhospital'] == "Holy path diagnostic centure"): ?> selected="selected"<?php endif; ?>>Holy path diagnostic centure</option>
    <option<?php if ($result['reqhospital'] == "Health care diagnostic center"): ?> selected="selected"<?php endif; ?>>Health care diagnostic center</option>
    <option<?php if ($result['reqhospital'] == "Central hospital"): ?> selected="selected"<?php endif; ?>>Central hospital</option>
    <option<?php if ($result['reqhospital'] == "Holy care medical services"): ?> selected="selected"<?php endif; ?>>Holy care medical services</option>
    <option<?php if ($result['reqhospital'] == "South point hospital"): ?> selected="selected"<?php endif; ?>>South point hospital</option>
    <option<?php if ($result['reqhospital'] == "Adhunik hospital"): ?> selected="selected"<?php endif; ?>>Adhunik hospital</option>
    <option<?php if ($result['reqhospital'] == "Good health clinic"): ?> selected="selected"<?php endif; ?>>Good health clinic</option>
    <option<?php if ($result['reqhospital'] == "Unique hospital & diagonistic center"): ?> selected="selected"<?php endif; ?>>Unique hospital & diagonistic center</option>
    <option<?php if ($result['reqhospital'] == "Ibn sina hospital & diagonistic center"): ?> selected="selected"<?php endif; ?>>Ibn sina hospital & diagonistic center</option>
    <option<?php if ($result['reqhospital'] == "Apex clinic & diagonistic centre"): ?> selected="selected"<?php endif; ?>>Apex clinic & diagonistic centre</option>
    <option<?php if ($result['reqhospital'] == "Health care hospital and troma center"): ?> selected="selected"<?php endif; ?>>Health care hospital and troma center</option>
    <option<?php if ($result['reqhospital'] == "Janata clinic & diagnostic centre"): ?> selected="selected"<?php endif; ?>>Janata clinic & diagnostic centre</option>
    <option<?php if ($result['reqhospital'] == "Zia heart foundation hospital and research Institute"): ?> selected="selected"<?php endif; ?>>Zia heart foundation hospital and research Institute</option>
    <option<?php if ($result['reqhospital'] == "Woodland medical services"): ?> selected="selected"<?php endif; ?>>Woodland medical services</option>
    <option<?php if ($result['reqhospital'] == "Medicare poli clinic and diagonistic center"): ?> selected="selected"<?php endif; ?>>Medicare poli clinic and diagonistic center</option>
    <option<?php if ($result['reqhospital'] == "Al-chemi diagnostic centre"): ?> selected="selected"<?php endif; ?>>Al-chemi diagnostic centre</option>
    <option<?php if ($result['reqhospital'] == "Desh health care & hospital"): ?> selected="selected"<?php endif; ?>>Desh health care & hospital</option>
    <option<?php if ($result['reqhospital'] == "Jamuna diagnostic centre"): ?> selected="selected"<?php endif; ?>>Jamuna diagnostic centre</option>
    <option<?php if ($result['reqhospital'] == "Amina general hostpital ltd"): ?> selected="selected"<?php endif; ?>>Amina general hostpital ltd</option>
    <option<?php if ($result['reqhospital'] == "islami bank community hospital dinajpur ltd"): ?> selected="selected"<?php endif; ?>>islami bank community hospital dinajpur ltd</option>
    <option<?php if ($result['reqhospital'] == "health care poly clinic"): ?> selected="selected"<?php endif; ?>>health care poly clinic</option>
    <option<?php if ($result['reqhospital'] == "desh clinic & diagnostic"): ?> selected="selected"<?php endif; ?>>desh clinic & diagnostic</option>
    <option<?php if ($result['reqhospital'] == "metro diagnostic center limited "): ?> selected="selected"<?php endif; ?>>metro diagnostic center limited </option>
    <option<?php if ($result['reqhospital'] == "Islami Bank Community Hospital Manikgonj Ltd"): ?> selected="selected"<?php endif; ?>>Islami Bank Community Hospital Manikgonj Ltd</option>
    <option<?php if ($result['reqhospital'] == "Central Hospital & Digital Diagnostic Center"): ?> selected="selected"<?php endif; ?>>Central Hospital & Digital Diagnostic Center</option>
										
									      
									</select>
								</div>
							</div>
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