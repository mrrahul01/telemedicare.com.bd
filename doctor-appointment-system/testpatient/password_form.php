<?php
  require 'link.php';
  if (isset($_REQUEST['submit'])) 
  {
    $update_query="";
    $phone = $_REQUEST['phone'];
    $password = $_REQUEST['password'];
    $confirm_pwd = $_REQUEST['confirm_pwd'];
    $query = mysql_query("SELECT * FROM new_patient WHERE patient_phone='$phone'");
    $num = mysql_fetch_array($query);
    $patient_name =  $num['patient_name'];
    $email = $num['email'];
    $Package =  $num['Package'];
    
    
    $update_query = mysql_query("UPDATE new_patient SET patient_password = '$password' WHERE patient_phone ='$phone'" );
 


    if($update_query==true)
    {
      
      $msg_sucess = "Your new password update successfully.";
      require 'sendmail/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'razzkhan207@gmail.com';          // SMTP username
$mail->Password = 'this is rahul khan'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('mr.ruhul.khan@gmail.com', 'telemedicare.com.bd');
$mail->addReplyTo('mr.ruhul.khan@gmail.com', 'telemedicare.com.bd');
$mail->addAddress('mr.ruhul.khan@gmail.com');   // Add a recipient
$mail->addCC($email);
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Your password is updated</h1>';
$bodyContent .= 'Patient new password : ';
$bodyContent .= $password;
$bodyContent .= '<br>Patient Phone Number : ';
$bodyContent .= $phone;

$bodyContent .= '<br>Patient name : ';
$bodyContent .= $patient_name;
$bodyContent .= '<br>Patient Package : ';
$bodyContent .= $Package;


$mail->Subject = 'Patient password is Updated';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 
header("location:../thankyou.php");
  

    
    }
    else{

    $error = "Please Provide the correct Phone number.";
   } 
  }
  
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
<style type="text/css">
.error{
margin-top: 6px;
margin-bottom: 0;
color: #fff;
background-color: #D65C4F;
display: table;
padding: 5px 8px;
font-size: 11px;
font-weight: 600;
line-height: 14px;
  }
  .green{
margin-top: 6px;
margin-bottom: 0;
color: #fff;
background-color: green;
display: table;
padding: 5px 8px;
font-size: 11px;
font-weight: 600;
line-height: 14px;
  }
</style>
</head>
<body>  
         <div class="col-md-12">
          <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
          <!-- edgead2 -->
          <!-- <ins class="adsbygoogle"
               style="display:inline-block;width:970px;height:90px"
               data-ad-client="ca-pub-9665679251236729"
               data-ad-slot="3549086226"></ins> -->
          <!-- <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>   -->
        </div> 
        <div class="modal-dialog">
        <h2>You can recover your Password</h2>
                        
        <div class="modal-content col-md-10">
        <div class="modal-header">
        <h4 class="modal-title"><i class="icon-paragraph-justify2"></i> Change New Password</h4>
        </div>
        <form method="post" autocomplete="off" id="password_form">
          <div class="modal-body with-padding">
          <div class="form-group">
            <div class="row">
              <div class="col-sm-10">
                <label>Phone number</label>
                <input type="text" name="phone"  class="form-control">
              </div>
            </div>
          </div>                             
          <div class="form-group">
            <div class="row">
              <div class="col-sm-10">
                <label>New Password</label>
                <input type="password"  name="password" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group">
          <div class="row">
            <div class="col-sm-10">
              <label>Confirm password</label>
              <input type="password"  name="confirm_pwd" class="form-control">
            </div>
          </div>
          </div>         
          </div>
           <div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?>" id="logerror">
             <?php echo @$error; ?><?php echo @$msg_sucess; ?>
            </div> 
          <!-- end Add popup  -->  
          <div class="modal-footer">
                    
            <input type="submit" id="btn-pwd" name="submit" value="Submit" class="btn btn-primary">            
          </div>
        </form> 

        </div>  
        <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- edgead2 -->
          <!-- <ins class="adsbygoogle"
               style="display:inline-block;width:970px;height:90px"
               data-ad-client="ca-pub-9665679251236729"
               data-ad-slot="3549086226"></ins> -->
          <!-- <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>   -->
        </div> 
        
</body>
</html>
