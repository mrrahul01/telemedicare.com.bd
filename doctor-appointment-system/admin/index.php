<?php
 require 'link.php';
 @ob_start();
 ?>

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
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">LOGIN</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4> Welcome Online Doctor's Appoinment System </h4>
					</div>
					<div class="login-body">
						<form action="" method="post">
						<?php 
							if (isset($_REQUEST['submit'])) 
							{
								$user_name = $_REQUEST['user_name'];
								$password = $_REQUEST['password'];

							  $result = mysql_query("SELECT id,user_name,pass FROM admin WHERE user_name= '".$user_name."' AND pass='".$password."'");
							    $num = mysql_num_rows($result);
							    if ($num > 0) 
							    {
							       $rows=mysql_fetch_array($result);
							      session_start();
							      $_SESSION['phonenum']=$rows['phonenum'];
							      $_SESSION['admin_id']=$rows['id'];
							      $_SESSION['admin_name']=$rows['user_name'];
							      header("location:dashboard.php");
							    }
							  else
							      {
							      	echo "<div class='alert alert-danger'>Access Denied ! Invalid login Try Again </div>";
							     
							      }

							}
						 ?>
							<input type="text" class="user" name="user_name" placeholder="Username" required="">
							<input type="password" name="password" class="lock" placeholder="password">
							<input type="submit" name="submit" value="Sign In">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Classie -->
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>