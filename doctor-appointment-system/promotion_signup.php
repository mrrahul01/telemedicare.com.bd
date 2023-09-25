<?php require 'admin/link.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
<title> Online Doctor's Appoinment </title>
<link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<!-- <link rel="stylesheet" type="text/css" href="../css/style.css"> -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css1/style.css" rel='stylesheet' type='text/css' />
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
            <div class="col-md-3">
           <a href = "http://telemedicare.com.bd/">  <img src="img/sfdfsdf.png"> </a>
         </div>
           <div class="col-md-6">
        
               <nav role="navigation" class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
    
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="login/index.php">Doctor's Area</a></li>
                
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="testpatient/health_card.php">Health Card</a></li>
                <li><a href="promotion.php">Promotions</a></li>
            </ul>
          
        </div>
    </nav>

          </div>
            <div class="col-md-3">
                <h4 class="hlcalltext pull-left glyphicon glyphicon-earphone"> 0174-7799494 <span class="spantext">(8AM-10PM)</span> </h4>
                <hr class="hrtop" />
            </div>
     </div>
  </section>
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<br><h3 class="title1">You Can Register</h3>
				<form action="action_promotion_signup.php" method="post" enctype="multipart/form-data"> 
				<div class="sign-up-row widget-shadow">
					<h5>Please Provide Your Personal Information :</h5>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Name* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="patient_name" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Address* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="paddress" required>
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
								<input type="text" name="patient_phone" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Date of Registration :</h4>
						</div><br>
						<div class="sign-up2">
								<input type="date" name="registration" class="btn datecl" placeholder="Barth Date">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Select Your Time :</h4>
						</div>
						<div class="sign-up2">
							<div class="form-group">
								<div class="col-sm-"><br>
									<select name="time" id="selector1" class="form-control1">
										<option> 09.00-10.00 AM  </option>
										<option> 10.00-11.00 AM  </option>
										<option> 11.00-12.00 PM </option>
										<option> 12.00-01.00 PM </option>
										<option> 01.00-02.00 PM </option>
										<option> 03.00-04.00 PM </option>
										<option> 04.00-05.00 PM </option>
										</select>

								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<br>
					<div class="sign-u">
						<div class="sign-up1">
							<h3 style="color: #993399;"><b>Our Bkash Number  :+8801822224392 And DBBL Number   :+8800000000<b></h3>
						</div>
						<br>
						<div class="clearfix"> </div>
					
								</div>
							
							<div class="sign-u">
						<div class="sign-up1">
							 <br><h4> Select Payment Method  :</h4>
						</div>
						<br><br>
						<div class="sign-up2">
							<div class="form-group">
								
								<div class="col-sm-">
									<select name="pmethod" id="selector1" class="form-control1">
										<option> Select Payment Method  </option>
										<option> BKash  </option>
										<option> DBBL </option>
										
									      
									</select>
								</div>
							</div>
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