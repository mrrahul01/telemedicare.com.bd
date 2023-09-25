<?php 
	require 'link.php';
	if (isset($_REQUEST['sign'])) 
	{
		$verifyimg = getimagesize($_FILES['image']['tmp_name']);

		if($verifyimg['mime'] != 'image/jpeg' && $verifyimg['mime'] != 'image/png'){
   		 echo "Only images are allowed!";
   		 exit;
			}
        $destination = '../admin/patient_image/';
        $fileName = $_FILES['image']['name'];
		$uploadfile = $destination . $fileName;
        
		$patient_name = $_REQUEST['patient_name'];
		$paddress = $_REQUEST['paddress'];
		$peraddress = $_REQUEST['peraddress'];
		$barth = $_REQUEST['barth'];
		$gender = $_REQUEST['gender'];
		$email = $_REQUEST['email'];
		$patient_phone = $_REQUEST['patient_phone'];
		$work_phone = $_REQUEST['work_phone'];
		$blood  = $_REQUEST['blood'];
		$Height = $_REQUEST['Height'];
		$Weight = $_REQUEST['Weight'];
		$marital = $_REQUEST['marital'];
		// $Occupation = $_REQUEST['Occupation'];
		// $Company_Name = $_REQUEST['Company_Name'];


		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$repassword = $_REQUEST['repassword'];
		$Package = $_REQUEST['Package'];
		$reqhospital = $_REQUEST['reqhospital'];
		$payment = $_REQUEST['payment'];
		$pmethod = $_REQUEST['pmethod'];
		$transitionID = $_REQUEST['transitionID'];
		$sql = "";


		
		
		if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) 
		{
		
	$query = "SELECT patient_id FROM new_patient WHERE patient_username='$username'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
   echo "<h1>This Username is Already Registered!!!</h1>";
   exit();
   }

			
		 else {
	$sql = mysql_query("INSERT INTO new_patient(patient_name,paddress,peraddress,gender,patient_profile_pic,email,patient_phone,barth,work_phone,patient_username,patient_password,blood,Height,Weight,marital,Package,reqhospital,payment,	pmethod,transitionID,admid_date)VALUES ('".$patient_name."','".$paddress."','".$peraddress."','".$gender."','".$fileName."','".$email."','".$patient_phone."','".$barth."','".$work_phone."','".$username."','".$password."','".$blood."','".$Height."','".$Weight."','".$marital."','".$Package."','".$reqhospital."','".$payment."','".$pmethod."','".$transitionID."',NOW())" );
	}	
		
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

$bodyContent = '<h1>A new new health card member have been sign up now</h1>';
$bodyContent .= 'patient_name : ';
$bodyContent .= $patient_name;
$bodyContent .= '<br>Email : ';
$bodyContent .= $email;
$bodyContent .= '<br>Your Requested Hospital : ';
$bodyContent .= $reqhospital;
$bodyContent .= '<br>Payment : ';
$bodyContent .= $payment;
$bodyContent .= '<br>transition ID : ';
$bodyContent .= $transitionID;


$mail->Subject = 'You have a new patient';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 

header("location:../thankyou.php");
		
		}
       
	
		}
		echo "<div class='alert alert-danger'> Given password dont matched </div>";
	}
 ?>