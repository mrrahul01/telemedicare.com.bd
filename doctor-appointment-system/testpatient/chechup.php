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
           <div class="col-md-6">
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
                <li><a href="testpatient/health_card.php">Health Card</a></li>
                <li><a href="promotion.php">Promotions</a></li>
            </ul>
          
        </div>
    </nav>

          </div>
            <div class="col-md-6">
                <h4 class="hlcalltext pull-left glyphicon glyphicon-earphone"> 0174-7799494 <span class="spantext">(8AM-10PM)</span> </h4>
                <hr class="hrtop" />
            </div>
     </div>
  </section>
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1">Basic Health Checkup and test</h3>
				<form action="action_health_test.php" method="post" enctype="multipart/form-data"> 
				<div class="sign-up-row widget-shadow">
					
					
					<div class="form-group">
								 <div class="row">
									 	<h5> Basic Health Checkup and test :</h5><br>
            <div class="col-md-6" style="color: blue;">
                <div class="panel panel-default text-left-align">
                    <div class="panel-heading">
<!--						Making the color and size file in css-->
						<h3 class="panel-title"><center><img src="../img/testName.png" class="img-responsive" height="40px weight="20px""></center></h3>
                    </div>
                    <div class="panel-body">
                        <span class="price" style="font-size: 200%"><center><b style="color:#009900"><sup></sup><sup></sup></span>
                        <span class="period">Please Select Test Name</span></b> </center>
                    </div>
	<div style="color: red;text-align: left;padding-left: .5cm; height: 400px;width: 100%;background-color: powderblue;overflow: scroll; ">
		
    <input type="checkbox" name="test[]" value="HbsAg-450tk" ><label>HbsAg = 450tk </label><br>
    <input type="checkbox" name="test[]" value="Blood_Glucose-170tk" ><label>Blood Glucose = 170 tk</label><br>
    <input type="checkbox" name="test[]" value="Blood_grouping _ABO_&_Rh_Typing-150tk" ><label>Blood grouping  ABO & Rh Typing = 150tk</label><br>
    <input type="checkbox" name="test[]" value="Fasting_Blood_Sugar-120tk" ><label>Fasting Blood Sugar = 120 tk</label><br>
    <input type="checkbox" name="test[]" value="Widal-420tk" ><label>Widal = 420tk</label><br>
    <input type="checkbox" name="test[]" value="Creatinine-400tk" ><label>Creatinine = 400tk</label><br>
	<input type="checkbox" name="test[]" value="S.Bilirubin-300tk"><label>S.Bilirubin = 300tk</label><br>
    <input type="checkbox" name="test[]" value="SGOT-400tk" ><label>SGOT = 400tk</label><br>
    <input type="checkbox" name="test[]" value="SGPT-400tk" ><label>SGPT = 400tk</label><br>
    <input type="checkbox" name="test[]" value="CBC-400tk" ><label>CBC = 400tk</label><br>
    <input type="checkbox" name="test[]" value="Haemoglobin-200tk" ><label>Haemoglobin = 200tk</label><br>
    <input type="checkbox" name="test[]" value="ESR-200tk" ><label>ESR = 200tk</label><br>
	<input type="checkbox" name="test[]" value="Urine_RME-150tk" ><label>Urine RME = 150tk</label><br>
    <input type="checkbox" name="test[]" value="IC_for_Malaria-450tk." ><label>ICT for Malaria = 450tk</label><br>
    <input type="checkbox" name="test[]" value="ASO_titer-420tk" ><label>ASO titer = 420tk</label><br>	
	<input type="checkbox" name="test[]" value="TPHA-420tk" ><label>TPHA = 420tk</label><br>
    <input type="checkbox" name="test[]" value=" RA-420tk" ><label> RA = 420tk</label><br>
    <input type="checkbox" name="test[]" value="Pregnancy_Test_(Urine)-150tk" ><label>Pregnancy Test (Urine) = 150tk</label><br>
    <input type="checkbox" name="test[]" value="ECG-300tk" ><label>ECG = 300tk</label><br>
    <input type="checkbox" name="test[]" value="X-ray_Chest_PA-350tk" ><label>X-ray  Chest PA = 350tk</label><br>
	<input type="checkbox" name="test[]" value="Ultrasound_LA-700tk" ><label>Ultrasound LA = 700tk</label><br>
    <input type="checkbox" name="test[]" value="Ultrasound_WA-800tk" ><label>Ultrasound WA = 800tk</label><br>
    <input type="checkbox" name="test[]" value="Ultrasound_PP-700tk" ><label>Ultrasound PP = 700tk</label><br>
    <input type="checkbox" name="test[]" value="MRI-8000tk" ><label>MRI = 8000tk</label><br>
    <input type="checkbox" name="test[]" value="city_scan-3600tk." ><label>City Scan = 3600tk.</label><br>
	<input type="checkbox" name="test[]" value="ICT for Malaria" ><label>ICT for Malaria</label><br><br>
					</div>
					</div>
            </div>
									 
									 
            <div class="col-md-6" style="color: red;text-align: left;">
                <div class="panel panel-default text-left-align">
                    <div class="panel-heading">
						<h3 class="panel-title"><center><img src="../img/healthName.png" class="img-responsive"  height="40px weight="20px""></center></h3>
                    </div>
                    <div class="panel-body">
                        <span class="price" style="font-size: 200%"><center><b><sup>TK</sup>820<sup></sup></span>
                        <span class="period">Full Package</span></b> </center>
                    </div>
	<div style="color: red;text-align: left;padding-left: .5cm; height: 400px;width: 100%;background-color: powderblue;overflow: scroll; ">
    <input type="checkbox" name="chkup[]" value="Height" ><label>Height</label><br>
    <input type="checkbox" name="chkup[]" value="Weight" ><label>Weight</label><br>
    <input type="checkbox" name="chkup[]" value="BMI" ><label>BMI</label><br>
    <input type="checkbox" name="chkup[]" value="Blood Glucose " ><label>Blood Glucose </label><br>
    <input type="checkbox" name="chkup[]" value="Cholesterol " ><label>Cholesterol </label><br>
    <input type="checkbox" name="chkup[]" value="Urine R/E" ><label>Urine R/E</label><br>
	<input type="checkbox" name="chkup[]" value="ECG" ><label>ECG</label><br>
    <input type="checkbox" name="chkup[]" value="Blood Group" ><label>Blood Group</label><br>
	
    <input type="checkbox" name="chkup[]" value="X-ray Chest PA" ><label>X-ray Chest PA</label><br>
    <input type="checkbox" name="chkup[]" value="First aid consultancy" ><label>First aid consultancy  </label><br><br>
					</div>
                </div>
            </div>
            
								</div>
						
						<div class="clearfix"> </div>
					</div>
					
					
					<h5>Please Input Your Personal Information :</h5>
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Name* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="member_name" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4> Age* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="age" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Date of Birth* :</h4>
						</div>
						<div class="sign-up2">
								<input type="date" name="barth" class="btn datecl" placeholder="Barth Date">
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Date of Test :</h4>
						</div>
						<div class="sign-up2">
								<input type="date" name="testdate" class="btn datecl" placeholder="Barth Date">
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Test Time:</h4>
						</div>
						<div class="sign-up2">
								<input type="time" name="testtime" class="btn datecl" placeholder="Barth Date">
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
					
<!--					stasting the selection of Country which is coming from database dynamically-->					
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Select Country :</h4>
						</div>
						<div class="sign-up2">
							<div class="form-group">
								<div class="col-sm-"><br>
									<select name="country" id="selector1" class="form-control1">
                                            <option value = ""> Select Country </option>
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
					
					
					
<!--					stasting the selection of city which is coming from database dynamically-->
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Select City :</h4>
						</div>
						<div class="sign-up2">
							<div class="form-group">
								<div class="col-sm-"><br>
									<select name="city" id="selector1" class="form-control1">
                                            <option value = ""> Select City </option>
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
					
<!--					stasting the selection of area which is coming from database dynamically-->
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Select Area :</h4>
						</div>
						<div class="sign-up2">
							<div class="form-group">
								<div class="col-sm-"><br>
									<select name="area" id="selector1" class="form-control1">
                                            <option value = ""> Select Area </option>
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
							<h4>Select Hospital :</h4>
						</div>
						<div class="sign-up2">
							<div class="form-group">
								<div class="col-sm-"><br>
									<select name="hospital" id="selector1" class="form-control1">
										<option> Select Hospital  </option>
										<option> Ibn sina hospital sylhet  </option>
										<option> Raj dental centre </option>
										<option> japan-bangladesh friendship hospital </option>
										<option> Faridpur shamorita general hospital </option>
										<option> Rajbari clinic </option>
										<option> Adorsho clinic </option>
										<option> Green hospital & diagnostic lab </option>
										<option> Gazipur clinic & diagnostic lab </option>
										<option> Grameen hospital </option>
										<option> Islami bank hospital, rajshahi </option>
										<option> Islami bank community hospital  </option>
										<option> Naogaon ltd </option>
										<option> Seba clinic </option>
										<option> Rangpur dental college </option>
										<option> Rangpur community medical college hospital </option>
										<option> prime medical college hospital </option>
										
										<option> Hasan x-ray clinic & pathology </option>
										<option> Surgicare clinic & diagnostic center </option>
										<option> Care-first diagnostic solution </option>
										<option> Molla clinic & diagnostic center </option>
										<option> Rajshahi model hospital </option>
										<option> Amana hospital limited </option>
										<option> United diagnostic centre & seba sadan nursing home </option>
										<option> Nesarabad digital lab </option>
										<option> South apollo diagnostic complex (pvt) ltd </option>
										<option> Prescription point </option>
										<option> Shahjalal medical services </option>
										<option> Comilla popular hospital </option>
										<option> Popular diagnostic lab </option>
										<option> Bellview medical services </option>
										
										
										<option> Sweet on dental care </option>
										
										<option> Nargis memorial clinic & diagnostic center </option>
										<option> khalishpur clinic & diagnostic center </option>
										<option> Ahsanullah clinic </option>
										<option> Northern private medical college & hospital </option>
										<option> Mam hospital & diagnostic center </option>
										<option> Xylia medicare </option>
										<option> Islami bank community hospital rangpur ltd. </option>
										<option> Niramoy clinic & diagnostic </option>
										<option> Ab siddique diagnostic center & doctor’s chamber </option>
										<option> Holy path diagnostic centure </option>
										<option> Rajshahi metropolitan hospital ltd </option>
										<option> Health care diagnostic center </option>
										<option> Central hospital </option>
										<option> Saic genaral hospital </option>
										<option> Doctors clinic </option>
										<option> Doctors lab </option>
										<option> Holy care medical services </option>
										<option> South point hospital </option>
										<option> Shabuddin medical college and hospital </option>
										<option> Comilla medical center </option>
										<option> Adhunik hospital </option>
										<option> Dental aid </option>
										<option> khulna eye hospital & laser center </option>
										<option> Good health clinic </option>
										<option> Unique hospital & diagonistic center </option>
										<option> Ibn sina hospital & diagonistic center </option>
										<option> Apex clinic & diagonistic centre </option>
										<option> Tulshan diagonistic centre </option>
										
										<option> Sono hospital </option>
										<option> Sono diagnostic centre </option>
										<option> Amin diagnostic & medical service </option>
										<option> Jhenidah prince hospital </option>
										<option> Al raiyan hospital </option>
										
										<option> Health care hospital and troma center </option>
										<option> Janata clinic & diagnostic centre </option>
										<option> Islami hospital (natore) </option>
										<option> Zia heart foundation hospital and research Institute </option>
										<option> Fitness care health club & pool club </option>
										
										<option> Woodland medical services </option>
										<option> Jalal memorial diagonostic center </option>
										<option> Noorzahan (pvt) hospital </option>
										<option> Unique (pvt) hospital </option>
										<option> Medicare poli clinic and diagonistic center </option>
										
										<option> Lake view (pvt) hospital </option>
										<option> Al-chemi diagnostic centre </option>
										<option> Desh health care & hospital </option>
										<option> Jamuna diagnostic centre </option>
										<option> Amina general hostpital ltd </option>
										
										<option> Siam diagnostic centre </option>
										<option> Anisa health care & diagnostic center </option>
										<option> islami bank community hospital dinajpur ltd. </option>
										<option> medi-care computerised diagnostic & consultation center </option>
										<option> health care poly clinic </option>
										
										<option> desh clinic & diagnostic </option>
										<option> general hospital cox’s bazer </option>
										<option> health & hope specialized hospital </option>
										<option> metro diagnostic center limited </option>
										<option> metro diagnostic center limited </option>
										
										<option> rabeya clinic & nursing home, gaibandha </option>
										<option> lab one medical services </option>
										<option> lab city medical service </option>
										<option> royal hospital </option>
										<option> Sonya Nursing Home </option>
										
										<option> Islami Bank Community Hospital Manikgonj Ltd.  </option>
										<option> Central Hospital & Digital Diagnostic Center </option>
										<option> Safeway Diagnostic Complex & Hospital </option>
										<option> Nurjehan Selim Niramoy Hospital </option>
										<option> Nipun Diagnostic & Clinic </option>
										
										<option> Sono Diagnostic Centre Ltd </option>
										<option> Daratana Hospital & Diagnostic Complex</option>
										<option> Islami Bank Community Hospital Naogaon Ltd </option>
										<option> Emu Diagnostic Centre </option>
										<option> Al Helal Diagnostic & Consultation Centre </option>
										
										<option> Modern Hospital Pvt </option>
										<option> 1 Mukti Clinic (Pvt) Ltd </option>
										
										
									      
									</select>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					
						
				</div>
				<div class="sign-up-row widget-shadow">
					
					
				<div class="sign-u">
						<div class="sign-up1">
							<h3 style="color: green;text-align: center;"><b>If You want to receive your report by home delivery method,You have to pay 200/=<b></h3>
						</div>
						<br>
						<div class="clearfix"> </div>
					
								</div>		
						
							
					
					
				<div class="sign-u">
						
						
						<div class="sign-u">
						<div class="sign-up1">
						<h4>Report Delivery System* :</h4>
						</div>
						<div class="sign-up2">
							<label>
								<input type="radio" value="Home_delivery" name="report" required>
								Home-Delivery
							</label>
							<label>
								<input type="radio" value="Self_Collection" name="report" required>
								Self-Collection
							</label>
						</div>
						<div class="clearfix"> </div>
					</div>
					
							
							<br>
							<div class="sign-u">
						<div class="sign-up1">
							<h3 style="color: #993399;"><b>Our Bkash Number  :+8801822224392 <b></h3>
						</div>
						<br>
						<div class="clearfix"> </div>
					
								</div>
								
								
								<br>

							
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
									</select>
								</div>
							</div>
						</div>
							
							
							
							<div class="clearfix"> </div>

							<div class="sign-u">
						<div class="sign-up1">
							<h4> Transion ID* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="transitionID" required>
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>

					<div class="sign-u">
						<div class="sign-up1">
							<h4> Payment (tk)* :</h4>
						</div>
						<div class="sign-up2">
								<input type="text" name="paymentchkup" required>
						</div>
						<div class="clearfix"> </div>
					</div>
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