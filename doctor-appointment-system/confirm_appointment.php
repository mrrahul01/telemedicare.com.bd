<?php require 'admin/link.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> Online Doctor's Appoinment </title>
<link rel="icon" href="img/favicon.png" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="../admin/css/style.css">
</head>
<body>
  <section class="header-section">
     <div class="row">
            <div class="col-md-3">
           <a href = "index.php">  <img src="img/sfdfsdf.png"> </a>
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

<section class="doctor-detail-section">
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3"style="margin-top: -25px;">
        <br>
        <br>
			 <h2 style="color:#1976d2"><b>Request for Appointment:</b></h2> 
        <hr />
        <?php 
        $A = $_GET['cnapn'];
        $B = $_GET['docid'];
      if (isset($_REQUEST['docid'])) 
      
      {
           $sql = mysql_query("SELECT * FROM new_doctor WHERE id='".$_REQUEST['docid']."'");
            $num = mysql_fetch_array($sql);
           
      }
         ?>
        <p style="color:red;font-size: 170%;">
Doctor Name:  <?php  echo $num['doc_name']; 
$doctor_name = $num['doc_name'];
    $doctor_email = $num['email'];
    // echo $doctor_email;
        ?> 
        </p>
        <hr />
        <p style="color:#1abda6;font-size: 150%;">
    Doctor's Speciality:   <?php echo $num['designation']; ?> 
        </p>
        <hr />
        <p style="color:red;font-size: 130%;">
    New Patient Fees:   <?php echo $num['new_p_f']; ?> 
        </p>
        <p style="color:orange;font-size: 130%;">
    Return Patient Fees:   <?php echo $num['return_p_f']; ?> 
        </p>
        <p style="color:#1abda6;font-size: 130%;">
    Report Follow Up Fees:   <?php echo $num['report_f_f']; ?> 
        </p>
        <hr />
        <?php 
        if (isset($_GET['cnapn'])) 
            {
            
            $sql1 = mysql_query("SELECT * FROM apoin_schedule WHERE id='".$_GET['cnapn']."'");
            $num1 = mysql_fetch_array($sql1);
            }
         ?>
         <h3 style="color:#0d47a1">Appointment Time: <?php echo $num1['apntime']; ?></h3> 
        <hr />



         <form action="" method="post" class="form-horizontal orange lighten-5">

         <?php 
            if (isset($_REQUEST['submit'])) {

                $docid = $_REQUEST['docid'];
                $apntime = $num1['apntime'];
                $mobile_num = $_REQUEST['mobile_num'];
                $visiting_doc = $_REQUEST['visiting_doc'];
                $confirm_booking_date = $_REQUEST['confirm_booking_date'];
                $email = $_REQUEST['email'];
                $fees = $_REQUEST['fees'];
                $transition = $_REQUEST['transition'];
                

    $query = "SELECT docid FROM confirm_appointment WHERE confm_date='$confirm_booking_date' AND apntime = '$apntime'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){

   
  echo "This Doctor is Already Booked, Please try another day or time!!!";
  
   exit();
   }

      
     else {
    $sqlapn = mysql_query("INSERT INTO confirm_appointment(docid,apntime,mobile_num,visiting_doc,confm_date,email,fees,transition)VALUES ('".$docid."','".$apntime."','".$mobile_num."','".$visiting_doc."','".$confirm_booking_date."','".$email."','".$fees."','".$transition."')");
  }


  if ($sqlapn) {
                  
                  
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
// $mail->setFrom('$email', 'telemedicare.com.bd');
$mail->addReplyTo('mr.ruhul.khan@gmail.com', 'telemedicare.com.bd');
$mail->addAddress('mr.ruhul.khan@gmail.com');   // Add a recipient
$mail->addCC($email);
$mail->addBCC($doctor_email);

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1> You have a new Appointment </h1>';
$bodyContent .= '<p>Patients Phone Number: </p>';
$bodyContent .= $mobile_num ;
$bodyContent .= '<p>Requested Doctor Name: </p>';
$bodyContent .= $doctor_name ;
$bodyContent .= '<p> Patient Email: </p>';
$bodyContent .= $email;
$bodyContent .= '<p>Requested Appointment date: </p>';
$bodyContent .= $confirm_booking_date ;
$bodyContent .= '<p>Requested Appointment Time: </p>';
$bodyContent .= $apntime ;
$bodyContent .= '<p> Visiting Status: </p>';
$bodyContent .= $visiting_doc;
$bodyContent .= '<p> Bkash TransitionID: </p>';
$bodyContent .= $transition;
$bodyContent .= '<p> Requested fees: </p>';
$bodyContent .= $fees;

$mail->Subject = 'You have a new Appointment';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 



                  header("location:thankyou.php");
                  session_destroy();
                  // echo "<div class='alert alert-success'> Appointment Request Send ! THANK YOU</div>";
                }
                else{
                    echo "<div class='alert alert-danger'>Sorry Appointment has some problem please try another one !!!</div>";
                }
            }
          ?>
<h3 style="color:#e65100;margin: 20px;"><br>Please Confirm the Appointment Date again!!!</h3>
        <div style="margin: 20px;"> 
             <input type="date" name="confirm_booking_date" class="btn datecl" placeholder="Booking Date">
         </div>

          <div class="form-group">
                  <label for="radio" class="col-sm-6 control-label"> Have you visited this doctor before? </label>
                  <div class="col-sm-6">
                    <div class="radio-inline"><label><input name="visiting_doc" value="Yes" type="radio"> YES </label></div>
                    <div class="radio-inline"><label><input name="visiting_doc" value="No" type="radio" required /> NO </label></div>
                  </div>
          </div>
        <div class="form-group">
            <label for="inputmobile" class="control-label col-xs-4">Mobile No*</label>
            <div class="col-xs-8">
                <input type="text" class="form-control" name="mobile_num" placeholder="Mobile No" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputemail" class="control-label col-xs-4">E-mail Address*</label>
            <div class="col-xs-8">
                <input type="text" class="form-control" name="email" placeholder="E-mail address" required>
            </div>
        </div>


        <div class="form-group">
            <label for="inputfees" class="control-label col-xs-4">Doctor fees (tk)*</label>
            <div class="col-xs-8">
                <input type="text" class="form-control" name="fees" placeholder="Doctor fees" required>
            </div>
        </div>


        <div class="form-group">
        <h3 style="color: #993399;margin: 40px;"><b>Our Bkash Number  :+8801822224392</b> </h3>
            <label for="inputtransitionid" class="control-label col-xs-4">Bkash TransitionID*</label>
            <div class="col-xs-8">
                <input type="text" class="form-control" name="transition" placeholder="Bkash TransitionID" required>
            </div>
        </div>

        
        <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
                <button type="submit" name="submit" class="btn btn-primary"> Request Appointment  </button>
            </div>
        </div>
			 <br>
    </form>

        </div>
    </div>
    </div>
</section>

 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script type="text/javascript">
    // this is embeded system for using twak.to chat application
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/57dd11c6c465436c8ce7bf22/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>


</body>
</html>                                   