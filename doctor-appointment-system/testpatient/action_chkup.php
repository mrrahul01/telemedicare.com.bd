<?php 
	
session_start();
	$con = mysql_connect("localhost","awaazsup_rahul","tC^hTy.QEd4m") or die("Could Not Connect Your Server");
	if ($con) 
	{
		mysql_select_db("awaazsup_telemedicare_m_s",$con) or die("Could Not Connect Your DB");
	}


	if(isset($_SESSION["name"])) //check session var
    {
		

			$name1 = $_SESSION['name'];
			
			
        }
       


if (isset($_REQUEST['sign'])) 
	{
		
		$name = $name1;
		$member_name = $_REQUEST['member_name'];
		$age = $_REQUEST['age'];
		$barth = $_REQUEST['barth'];
		$testdate = $_REQUEST['testdate'];
		$testtime = $_REQUEST['testtime'];
		$gender = $_REQUEST['gender'];
		$email = $_REQUEST['email'];
		$patient_phone = $_REQUEST['patient_phone'];
		
		$country = $_REQUEST['country'];
		$city = $_REQUEST['city'];
		$area = $_REQUEST['area'];
		$hospital = $_REQUEST['hospital'];
		
		$pmethod = $_REQUEST['pmethod'];
		$marital = $_REQUEST['marital'];
		$transitionID = $_REQUEST['transitionID'];
		$paymentchkup = $_REQUEST['paymentchkup'];
		$sql = "";

$query = "SELECT *  FROM  chkup_test  WHERE  testdate ='$testdate' AND testtime ='$testtime'  AND hospital='".$hospital."'";
	if ($query) {

	$query = "SELECT *  FROM  chkup_test  WHERE  testdate ='$testdate' AND testtime ='$testtime'  AND hospital='".$hospital."'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
   echo "<h1>This Hospital is booked at this moment!!!</h1>";
   
   echo "<h1>Please choose another day,time or Hospital for Booking the test.</h1>";
   exit();
   }

		else
		{
		$sql = mysql_query("INSERT INTO chkup_test (test,member_name,age,barth,testdate,testtime,gender,email,patient_phone,country,city,area,hospital,pmethod,marital,transitionID,paymentchkup) VALUES ('".$name."','".$member_name."','".$age."','".$barth."','".$testdate."','".$testtime."','".$gender."','".$email."','".$patient_phone."','".$country."','".$city."','".$area."','".$hospital."','".$pmethod."','".$marital."','".$transitionID."','".$paymentchkup."')") or die(mysql_error());
	}}}
header("location:http://telemedicare.com.bd/thankyou.php");
if ($sql)
		 {
		 	require 'sendmail/PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'razzkhan207@gmail.com';          // SMTP username
$mail->Password = 'this is rahul khan'; 			// SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to

$mail->setFrom('mr.ruhul.khan@gmail.com', 'telemedicare.com.bd');
$mail->addReplyTo('mr.ruhul.khan@gmail.com', 'telemedicare.com.bd');
$mail->addAddress('mr.ruhul.khan@gmail.com');   // Add a recipient
$mail->addCC($email);
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1> You have a Basic Health Checkup Member </h1>';
$bodyContent .= '<p>Members Name: </p>';
$bodyContent .= $member_name;
$bodyContent .= '<p> Members Phone Number: </p>';
$bodyContent .= $patient_phone;
$bodyContent .= '<p>Requested Test Names </p>';
$bodyContent .= $name ;
$bodyContent .= '<p>Requested Test Date: </p>';
$bodyContent .= $testdate ;
$bodyContent .= '<p> Requested Test Time: </p>';
$bodyContent .= $testtime;
$bodyContent .= '<p> Requested Country: </p>';
$bodyContent .= $country;
$bodyContent .= '<p> Requested City: </p>';
$bodyContent .= $city;
$bodyContent .= '<p> Requested Area </p>';
$bodyContent .= $area;
$bodyContent .= '<p> Requested Hospital: </p>';
$bodyContent .= $hospital;
$bodyContent .= '<p> Report Delivery System: </p>';
$bodyContent .= $report;
$bodyContent .= '<p> Selected Payment Method : </p>';
$bodyContent .= $pmethod;
$bodyContent .= '<p> Payment : </p>';
$bodyContent .= $paymentchkup;
$bodyContent .= '<p> transition ID : </p>';
$bodyContent .= $transitionID;


$mail->Subject = 'You have a Basic Health Checkup Member';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 

header("location:../thankyou.php");
	
}	
 ?>