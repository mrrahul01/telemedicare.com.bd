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
		<div id ="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Add New Doctor</h4>
						</div>
						<div class="form-body">
							<form action="action_add_new_doc.php" method="post" enctype="multipart/form-data"> 
								<div class="form-group"> 
									<label for="exampleInputName"> Name </label>
									 <input type="text" name="doc_name" class="form-control" placeholder="Doctor Name">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputEmail1"> Title/Designation *</label>
									 <input type="text" name="designation" class="form-control" placeholder="Title/Designation">
								</div> 
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Speciality *</label>
										<select name="speciality" id="selector1" class="form-control1">
											<option> Select Speciality </option>
										       <?php 
								                    $query = mysql_query("SELECT * FROM speciality");
								                    while ($result = mysql_fetch_array($query)) 
								                    {
								                        echo '<option value="'.$result["speciality"].'">'.$result["speciality"].'</option>';    
								                    }
								                ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Gender </label>
										<select name="gender" id="selector1" class="form-control1">
											<option> Select Gender </option>
											<option value="Male"> Male </option>
											<option value="Female"> Female </option>
										</select>
									</div>
								</div>
								<div class="form-group"> 
									<label for="exampleInputEmail1"> Profile Image </label>
									 <input type="file" name="doc_profile_pic" id="exampleInputFile">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputEmail1"> Email </label>
									 <input type="email" name="email" class="form-control" placeholder="Email">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputNum"> Phone Number </label>
									 <input type="text" name="doc_phone" class="form-control" placeholder="Phone Number">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputNum"> Description </label>
									 <textarea rows="3" name="description" class="form-control1 control2" placeholder="Description" ></textarea>
								</div>
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Country </label>
											<select name="country" id="selector1" class="form-control1">
											<option> Select Speciality </option>
										       <?php 
								                    $query = mysql_query("SELECT * FROM country");
								                    while ($result = mysql_fetch_array($query)) 
								                    {
								                        echo '<option value="'.$result["country"].'">'.$result["country"].'</option>';    
								                    }
								                ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> City </label>
											<select name="city" id="selector1" class="form-control1">
											<option> Select Speciality </option>
										       <?php 
								                    $query = mysql_query("SELECT * FROM city");
								                    while ($result = mysql_fetch_array($query)) 
								                    {
								                        echo '<option value="'.$result["city"].'">'.$result["city"].'</option>';    
								                    }
								                ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-">
										<label for="exampleInputEmail1"> Area </label>
											<select name="area" id="selector1" class="form-control1">
											<option> Select Speciality </option>
										       <?php 
								                    $query = mysql_query("SELECT * FROM area");
								                    while ($result = mysql_fetch_array($query)) 
								                    {
								                        echo '<option value="'.$result["area"].'">'.$result["area"].'</option>';    
								                    }
								                ?>
										</select>
									</div>
								</div>
								<div class="form-group"> 
									<label for="exampleInputName"> Notification To </label>
									 <input type="text" name="notify_to" class="form-control" placeholder="Notification Number">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputName"> New Patient Fees </label>
									 <input type="text" name="new_p_f" class="form-control" placeholder="New Patient Fees">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputName"> Return Patient Fees </label>
									 <input type="text" name="return_p_f" class="form-control" placeholder="Return Patient Fees">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputName"> Report Follow Up Fees</label>
									 <input type="text" name="report_f_f" class="form-control" placeholder="Report Follow Up Fees">
								</div> 

								<label for="exampleInputName"> Consultation Center </label>

								<div class="form-group"> 
									<label for="exampleInputName"> First Chamber </label>
									 <input type="text" name="first_cm_address" class="form-control" placeholder="Address">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputName"> Second Chamber </label>
									 <input type="text" name="second_cm_address" class="form-control" placeholder="Address">
								</div> 
								<div class="form-group"> 
									<label for="exampleInputName"> Third Chamber </label>
									 <input type="text" name="third_cm_address" class="form-control" placeholder="Address">
								</div> 
								<!-- <div class="form-group"> 
										<h4 id="wrk-hour" class="title3"> Working Hour </h4>
										<div class="scrollbar scrollbar1">
											<div id="working-hour-box" class="single-bottom">
												<ul id="working-hour-box">
									<?php
									$sql="SELECT * FROM  apoin_time";
									$result=mysql_query($sql);
									if  (mysql_num_rows($result)>0) {
									while ($row = mysql_fetch_assoc($result))
									{

									?>
								   <div class="checkbox">
									<label>
										<input value="<?php echo $row["appoinment_time"];?>"  name='apoin_time[]' type="checkbox">
										<?php echo $row["appoinment_time"];?>
									</label>
								</div>
									<?php } }?>
												</ul>
											</div>
										</div>
								</div> 

									<div class="form-group"> 
										<h4 id="wrk-hour" class="title3"> Working Day </h4>
										<div class="scrollbar scrollbar1">
											<div id="working-hour-box" class="single-bottom">
												<ul id="working-hour-box">
																	<?php
									$sql="SELECT * FROM  day";
									$result=mysql_query($sql);
									if  (mysql_num_rows($result)>0) {
									while ($row = mysql_fetch_assoc($result))
									{

									?>
								   <div class="checkbox">
									<label>
										<input value="<?php echo $row["day"];?>"  name='day[]' type="checkbox">
										<?php echo $row["day"];?>
									</label>
								</div>
									<?php } }?>
												</ul>
											</div>
										</div>
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