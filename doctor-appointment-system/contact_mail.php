<?php 
            if (isset($_REQUEST['submit'])) {

                $name  = $_REQUEST['name'];
                $email = $_REQUEST['email'];
                $phone = $_REQUEST['phone'];
                $details = $_REQUEST['details'];
                                  
require 'sendmail/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'razzkhan207@gmail.com';          // SMTP username
$mail->Password = '01834663950'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('mr.ruhul.khan@gmail.com', 'telemedicare.com.bd');
$mail->addReplyTo('mr.ruhul.khan@gmail.com', 'telemedicare.com.bd');
$mail->addAddress('mr.ruhul.khan@gmail.com');   // Add a recipient
$mail->addCC($email);
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1> You have a new Enquiries </h1>';
$bodyContent .= '<p> Enquiries Name: </p>';
$bodyContent .= $name ;
$bodyContent .= '<p>Enquiries Phone Number: </p>';
$bodyContent .= $phone ;
$bodyContent .= '<p>Enquiries Email ID: </p>';
$bodyContent .= $email ;
$bodyContent .= '<p>Enquiries Details: </p>';
$bodyContent .= $details ;


$mail->Subject = 'You have a new Enquiries';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 



                  echo "<h1> One Mail has been sent for Enquiries your deails ! THANK YOU</h1>";
                }
                else{
                    echo "<div class='alert alert-danger'>Sorry For our technical problem.Please try next time !!!</div>";
                }
          
          ?>