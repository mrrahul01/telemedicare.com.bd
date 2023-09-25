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
	<meta charset="UTF-8">
<meta name="description" content="Free Web tutorials">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Hege Refsnes">
	
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
           <a href = "http://telemedicare.com.bd/">  <img src="../img/sfdfsdf.png"> </a>
         </div>
           <div class="col-md-5">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="login/index.php">Doctor's Area</a></li>
                
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                
                <li><a href="promotion.php">Promotions</a></li>
            </ul>
          
        </div>
    </nav>

          </div>
            <div class="col-md-4">
                <h4 class="hlcalltext pull-left glyphicon glyphicon-earphone"> 0174-7799494 <span class="spantext">(8AM-10PM) Everyday</span> </h4>
                <hr class="hrtop" />
            </div>
     </div>
  </section>
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1">SignUp Here</h3>
				<form action="action_sign_newPatient_doc.php" method="post" enctype="multipart/form-data"> 
				<div class="sign-up-row widget-shadow">
					<h5>Please Input Your Personal Information :</h5>
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
							<h4>Primary Address* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="paddress" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Permanent Address* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="peraddress" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Date of Birth* :</h4>
						</div>
						<div class="sign-up2">
								<input type="date" name="barth" class="btn datecl" placeholder="Booking Date">
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
								 <input type="file" name="patient_profile_pic" id="exampleInputFile">
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
							<h4> Work Phone No* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="work_phone" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Select Blood Group :</h4> 
						</div>
						<div class="sign-up2">
							<div class="form-group">
								<div class="col-sm-"><br>
									<select name="blood" id="selector1" class="form-control1">
										<option> Select Blood Group  </option>
										<option> O(negative)</option>
										<option> O(+)</option>
										<option> A(negative)</option>
										<option> A(+)</option>
										<option> B(negative)</option>
										<option> B(+)</option>
										<option> AB(negative)</option>
										<option> AB(+)</option>


									      
									</select>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Height :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="Height">
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Weight :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="Weight">
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Marital Status :</h4>
						</div>
						<div class="sign-up2">
							<div class="form-group">
								<div class="col-sm-"><br>
									<select name="marital" id="selector1" class="form-control1">
										<option> Married  </option>
										<option> Unmarried </option>
									      
									</select>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
								
					<div class="sign-u">
						<div class="sign-up1">
							<h4>  Occupation :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name=" Occupation ">
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Company Name  :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="Company_Name ">
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
					
				</div>
				<div class="sign-up-row widget-shadow">
					<h5> Pricing Table :</h5>
					
						
						
							<div class="form-group">
								 <div class="row">
            <div class="col-md-4" style="color: green;">
                <div class="panel panel-default text-left-align">
                    <div class="panel-heading">
						<h3 class="panel-title"><center><img src="../img/silver.jpg" class="img-responsive" height="40px weight="20px""></center></h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><center><b><sup>TK</sup>300<sup></sup></span>
                        <span class="period">Per Year</span></b> </center>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">1. Affordable cost & easy to use.</li>
                        <li class="list-group-item">2. Accepted at biggest network across the country.</li>
                        <li class="list-group-item">3. You can choose for everyone in your friends & family.</li>
                        <li class="list-group-item">4. Health related additional value added services.</li>
                        <li class="list-group-item">5. Get  10% Discounts is must.</li>
						<li class="list-group-item">6. Online Doctor Appointment. </li>
						<li class="list-group-item">7. Online Hospital Appointment. </li>
						<li class="list-group-item">8. Information Blood Bank in Bangladesh . </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4" style="color: blue;">
                <div class="panel panel-default text-left-align">
                    <div class="panel-heading">
						<h3 class="panel-title"><center><img src="../img/GoldPackage.jpg" class="img-responsive" height="40px weight="20px""></center></h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><center><b><sup>TK</sup>400<sup></sup></span>
                        <span class="period">Per Year</span></b> </center>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">1. Affordable cost & easy to use.</li>
                        <li class="list-group-item">2. Accepted at biggest network across the country.</li>
                        <li class="list-group-item">3. You can choose for everyone in your friends & family.</li>
                        <li class="list-group-item">4. Health related additional value added services.</li>
                        <li class="list-group-item">5. Get 15% Discounts is must.</li>
						<li class="list-group-item">6. Online Doctor Appointment. </li>
						<li class="list-group-item">7. Online Hospital Appointment. </li>
						<li class="list-group-item">8. Information Blood Bank in Bangladesh . </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4"style="color: red;">
                <div class="panel panel-default text-left-align">
                    <div class="panel-heading">
						<h3 class="panel-title"><center><img src="../img/platinum.jpg" class="img-responsive"  height="40px weight="20px""></center></h3>
                    </div>
                    <div class="panel-body">
                        <span class="price"><center><b><sup>TK</sup>500<sup></sup></span>
                        <span class="period">Per Year</span></b> </center>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">1. Affordable cost & easy to use.</li>
                        <li class="list-group-item">2. Accepted at biggest network across the country.</li>
                        <li class="list-group-item">3. You can choose for everyone in your friends & family.</li>
                        <li class="list-group-item">4. Health related additional value added services.</li>
                        <li class="list-group-item">5. Get  20% Discounts is must.</li>
						<li class="list-group-item">6. Online Doctor Appointment. </li>
						<li class="list-group-item">7. Online Hospital Appointment. </li>
						<li class="list-group-item">8. Information Blood Bank in Bangladesh . </li>

                    </ul>
                </div>
            </div>
            
        
							</div>
						
						<div class="clearfix"> </div>
					</div>
					
					
					
					
					
					
					
					
<!-- 					<div class="sign-u">
						<div class="sign-up1">
							<h4> Working Hour's:</h4>
						</div>
						<div class="sign-up2">
								<div  class="form-group">
								
									<div class="col-sm-12">
										<select multiple="" class="form-control1">
											<option  type="checkbox">Option 1</option>
											<option  type="checkbox">Option 2</option>
											<option  type="checkbox">Option 3</option>
											<option  type="checkbox">Option 4</option>
											<option  type="checkbox">Option 5</option>
										</select>
									</div>
								</div>
						</div>
						<div class="clearfix"> </div>
					</div> -->
	<!-- 				<div class="sign-u">
						<div class="sign-up1">
							<h4> Working Hour's:</h4>
						</div>
						<div class="sign-up2">
								<div class="form-group">
									<label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>
									<div class="col-sm-8">
										<div class="checkbox-inline"><label><input type="checkbox"> Unchecked</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" checked=""> Checked</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
										<div class="checkbox-inline"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
									</div>
								</div>
						</div>
						<div class="clearfix"> </div>
					</div> -->
					
				
					
					<div class="sign-u">
						<div class="sign-up1">
							 <h4>Please Select Your Package  :</h4>
						</div>
						<br>
						<div class="sign-up2">
							<div class="form-group">
								<div class="col-sm-">
									<select name="Package" id="selector1" class="form-control1">
										<option> Select Package  </option>
										<option> Silver  </option>
										<option> Gold </option>
										<option> Platinum </option>
									      
									</select>
								</div>
							</div>
						</div>
							
							
							<div class="sign-u">
						<div class="sign-up1">
							<h3 style="color: #993399;"><b>Our Bkash Number  :+880000000 And DBBL Number   :+8800000000<b></h3>
						</div>
						<br>
						<div class="clearfix"> </div>
					</div>
							
							
						<div class="sign-u">
						<div class="sign-up1">
							 <h4> Select Payment Method  :</h4>
						</div>
						<br>
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
							<br>
							<div class="col-md-12 panel-grids">
								<div class="panel panel-primary"> <div class="panel-heading"> <center><h3 class="panel-title">TERMS AND CONDITIONS</h3></center> </div> <div class="panel-body">  01.	নিবন্ধন হওয়ার দিন থেকে এই কার্ডের মেয়াদ ৩৬৫ দিন ব্যবহারের সকল সুযোগ পাবেন।<br><br>
02.	আপনি অব্যশই চিকিৎসা শুরুর আগ মুহরতে আমাদের প্রতিনিধি ও অথবা সরাসরি আমাদের কল সেন্টারে ফোন দিয়ে – আপনার চিকিৎসাকৃত প্রতিষ্ঠানের নাম ও সেবার বিবরন উল্ল্যখ করতে হবে । <br> <br>
03.	কার্ড হারিয়ে গেলে সাথে সাথেই আমাদের প্রতিনিধি ও অথবা সরাসরি আমাদের কল সেন্টারে ফোন দিয়ে জানাতে হবে । </div> </div>
					</div>
							
							
							<div class="clearfix"> </div>
					</div>
					
					<br>
					
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