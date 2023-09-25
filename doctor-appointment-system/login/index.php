<?php 
session_start();
@ob_start();

require 'link.php'; ?>
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
            <div class="col-md-3">
           <a href = "http://telemedicare.com.bd/">  <img src="../img/sfdfsdf.png"></a>
         </div>
           <div class="col-md-6">
         <!--     <ul class="nav navbar-nav">
                <li><a href="login/index.php"> Doctor </a></li>
                <li><a href="#"> Health Tips </a></li>
                <li><a href="http://telemedicare.com.bd/about.php"> About Us </a></li>
                <li><a href="http://telemedicare.com.bd/contact.php"> Contact Us </a></li>
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
            <div class="col-md-3">
                <h4 class="hlcalltext pull-left glyphicon glyphicon-earphone"> 0174-7799494 <span class="spantext">(8AM-10PM)</span> </h4>
                <hr class="hrtop" />
            </div>
     </div>
  </section>
		
		<div id="page-wrapper" style="background:url('images/background.jpg');">
			<div class="main-page login-page ">
				<h3 class="title1">DOCTOR SIGN IN</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4> Welcome Online Doctor's Appoinment System  <br> Not a Member? <a href="sign_up.php">  Sign Up </a> </h4>
						<h3>If you Registeration for a new doctor you will get <span>100tk </span>instant flexiload on your personal phone number</h3>
						<h5>Note: You have to give BMDC registration number</h5>
						<h4> Have you forgot Your Password   <a href="password_recovery.php"> click here </a> </h4>
					</div>
					<div class="login-body">
						<form action="" method="post">
						<?php 
							if (isset($_REQUEST['SignIn'])) 
							{
								$username = $_REQUEST['username'];
								$password = $_REQUEST['password'];

							  $result = mysql_query("SELECT id,username,password FROM new_doctor WHERE username= '".$username."' AND password='".$password."'");
							    $num = mysql_num_rows($result);
							    if ($num > 0) 
							    {
							       $rows=mysql_fetch_array($result);
							      session_start();
							      $_SESSION['docname']=$rows['username'];
							      $_SESSION['docid']=$rows['id'];
							      header("location:dashboard.php");
							    }
							  else
							      {
							      	echo "<div class='alert alert-danger'>Access Denied ! Invalid login Try Again </div>";
							     
							      }

							}
						 ?>
							<input type="text" class="user" name="username" placeholder="Username" required="">
							<input type="password" name="password" class="lock" placeholder="password">
							<input type="submit" name="SignIn" value="Sign In">
						</form>
					</div>
				</div>
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