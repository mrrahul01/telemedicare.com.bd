<?php require 'link.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
<title> Online Doctor's Appoinment </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
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
<body>
	<div class="main-content">
	<section class="header-section">
     <div class="row">
            <div class="col-md-2">
           <a href = "http://telemedicare.com.bd/">  <img src="../img/sfdfsdf.png"> </a>
         </div>
           <div class="col-md-7">
         <!--     <ul class="nav navbar-nav">
                <li><a href="login/index.php"> Doctor </a></li>
                <li><a href="http://localhost//telecare/admin"> Health Tips </a></li>
                <li><a href="about.php"> About Us </a></li>
                <li><a href="contact.php"> Contact Us </a></li>
             </ul>    -->
               <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
      <!--       <a href="#" class="navbar-brand">Brand</a> -->
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="http://telemedicare.com.bd/index.php">Home</a></li>
                <li><a href="http://telemedicare.com.bd/login/index.php">Doctor's Area</a></li>
                <li><a href="http://telemedicare.com.bd/blog/">Health Tips</a></li>
                <li><a href="http://telemedicare.com.bd/about.php">About</a></li>
                <li><a href="http://telemedicare.com.bd/contact.php">Contact</a></li>
                <li><a href="http://telemedicare.com.bd/testpatient/health_card.php">Health Card</a></li>
                <li><a href="http://telemedicare.com.bd/promotion.php">Promotions</a></li>
            </ul>
          
        </div>
    </nav>

          </div>
            <div class="col-md-3">
                <h4 class="hlcalltext pull-left glyphicon glyphicon-earphone"> 0174-7799494 <span class="spantext">(Everyday 8AM-10PM)</span> </h4>
                <hr class="hrtop" />
            </div>
     </div>
  </section>
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1">SignUp Here</h3>
				<form action="action_sign_new_doc.php" method="post" enctype="multipart/form-data"> 
				<div class="sign-up-row widget-shadow">
					<h5>Personal Information :</h5>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Name* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="doc_name" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Title/Designation* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="designation" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Speciality* :</h4>
						</div>
						<div class="sign-up2">
							<div class="form-group">
								<div class="col-sm-">
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
						</div>
						<div class="clearfix"> </div>
					</div>
		
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Gender* :</h4>
						</div>
						<div class="sign-up2">
							<label>
								<input type="radio" value="Male" name="gender" required>
								Male
							</label>
							<label>
								<input type="radio" value="Female" name="gender" required>
								Female
							</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<label for="exampleInputFile">
							Profile Image </label>
						</div>
						<div class="sign-up2">
								 <input type="file" name="image" id="exampleInputFile">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Email Address :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="email" >
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Phone No* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="doc_phone" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Description :</h4>
						</div>
						<div class="sign-up2">
							<textarea rows="6" class="form-control1 control2" name="description" placeholder="Description :" ></textarea>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Degree & other specification :</h4>
						</div>
						<div class="sign-up2">
							<textarea rows="6" class="form-control1 control2" name="dgre_spc" placeholder="Degree & other specification :" ></textarea>
						</div>
						<div class="clearfix"> </div>
					</div>
		
					<h6>Login Information :</h6>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Username* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="username" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Password* :</h4>
						</div>
						<div class="sign-up2">
								<input type="password" name="password" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Confirm Password* :</h4>
						</div>
						<div class="sign-up2">
						
								<input type="password" name="repassword" required>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>BMDC Reg. No :</h4>
						</div>
						<div class="sign-up2">
						
								<input type="text" name="BMDC" >
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="sign-up-row widget-shadow">
					<h5> Chamber Location :</h5>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Country :</h4>
						</div>
						<div class="sign-up2">
							<div class="form-group">
								<div class="col-sm-">
										<select name="country" id="selector1" class="form-control1">
										<option> Select country </option>
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
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>City :</h4>
						</div>
						<div class="sign-up2">
							<div class="form-group">
								<div class="col-sm-">
										<select name="city" id="selector1" class="form-control1">
										<option> Select city </option>
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
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Area :</h4>
						</div>
						<div class="sign-up2">
							<div class="form-group">
									<div class="col-sm-">
											<select name="area" id="selector1" class="form-control1">
											<option> Select area </option>
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
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Notification To :</h4>
						</div>
						<div class="sign-up2">
						
								<input type="text" name="notify_to">
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> New Patient Fees:</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text" name="new_p_f" >
					
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Return Patient Fees:</h4>
						</div>
						<div class="sign-up2">
						
								<input type="text" name="return_p_f" >
						
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Report Follow Up Fees:</h4>
						</div>
						<div class="sign-up2">
						
								<input type="text" name="report_f_f">
						
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> First Chamber </h4>
						</div>
						<div class="sign-up2">
						
								<input type="text" name="first_cm_address">
						
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>  Second Chamber </h4>
						</div>
						<div class="sign-up2">
						
								<input type="text" name="second_cm_address">
						
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Third Chamber </h4>
						</div>
						<div class="sign-up2">
						
								<input type="text" name="third_cm_address">
						
						</div>
						<div class="clearfix"> </div>
					</div>


					<div class="sub_home">
					
							<input type="submit" name="sign" value="Submit">
					
						<div class="clearfix"> </div>
					</div>
				</div>
				</form>
			</div>
		</div>
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