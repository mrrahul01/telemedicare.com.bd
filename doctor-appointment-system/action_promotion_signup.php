<?php 
	require 'admin/link.php';
	if (isset($_REQUEST['sign'])) 
	{
		
		$patient_name = $_REQUEST['patient_name'];
		$paddress = $_REQUEST['paddress'];
		
		$gender = $_REQUEST['gender'];
		$email = $_REQUEST['email'];
		$patient_phone = $_REQUEST['patient_phone'];
		$registration = $_REQUEST['registration'];
		$time = $_REQUEST['time'];
		$query = "SELECT * FROM promoregistration WHERE email='$email'  ";
	if ($query) {

		$query = "SELECT * FROM promoregistration WHERE email='$email' AND patient_phone='$patient_phone' UNION SELECT * FROM promoregistration WHERE registration='$registration' AND time1 = '$time'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
   echo "You are Already Registered!!!";
   exit();
   }

			
		 else {
	$sql = mysql_query("INSERT INTO promoregistration(patient_name,paddress,gender,email,patient_phone,registration,time1)VALUES ('".$patient_name."','".$paddress."','".$gender."','".$email."','".$patient_phone."','".$registration."','".$time."')" );
	}}	
		if ($sql)
		 {
			
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

$bodyContent = '<h1> You have a Promotional Member </h1>';
$bodyContent .= '<p>Members Name: </p>';
$bodyContent .= $patient_name;
$bodyContent .= '<p> Members Phone Number: </p>';
$bodyContent .= $patient_phone;
$bodyContent .= '<p>Address </p>';
$bodyContent .= $paddress ;
$bodyContent .= '<p>gender </p>';
$bodyContent .= $gender ;
$bodyContent .= '<p>email: </p>';
$bodyContent .= $email ;
$bodyContent .= '<p> Requested day: </p>';
$bodyContent .= $registration;
$bodyContent .= '<p> Requested Time: </p>';
$bodyContent .= $time;


$mail->Subject = 'You have a Promotional Member';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
			
			header("location:thankyou.php");
			
		
	
		}
		
		echo "<div class='alert alert-danger'> Please provide the correct information </div>";
	}
 ?>