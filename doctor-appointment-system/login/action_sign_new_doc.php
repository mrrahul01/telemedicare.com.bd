<?php 
	require 'link.php';
	if (isset($_REQUEST['sign'])) 
	{
		$verifyimg = getimagesize($_FILES['image']['tmp_name']);

		if($verifyimg['mime'] != 'image/jpeg' && $verifyimg['mime'] != 'image/png'){
   		 echo "Only images are allowed!";
   		 exit;
			}
        $destination = '../admin/doctor_image/';
        $fileName = $_FILES['image']['name'];
		$uploadfile = $destination . $fileName;

		$doc_name = $_REQUEST['doc_name'];
		$designation = $_REQUEST['designation'];
		$speciality = $_REQUEST['speciality'];
		$gender = $_REQUEST['gender'];
		$email = $_REQUEST['email'];
		$doc_phone = $_REQUEST['doc_phone'];
		$description = $_REQUEST['description'];
		$dgre_spc = $_REQUEST['dgre_spc'];
		$country = $_REQUEST['country'];
		$city = $_REQUEST['city'];
		$area = $_REQUEST['area'];
		$notify_to = $_REQUEST['notify_to'];
		$new_p_f = $_REQUEST['new_p_f'];
		$return_p_f = $_REQUEST['return_p_f'];
		$report_f_f = $_REQUEST['report_f_f'];
		$first_cm_address = $_REQUEST['first_cm_address'];
		$second_cm_address = $_REQUEST['second_cm_address'];
		$third_cm_address = $_REQUEST['third_cm_address'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$repassword = $_REQUEST['repassword'];
		$BMDC = $_REQUEST['BMDC'];
		$sql = "";
		move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);



$query = "SELECT * FROM new_doctor WHERE email='$email'  ";
	if ($query) {

		$query = "SELECT id FROM new_doctor WHERE username='$username' AND password='$password' UNION SELECT id FROM new_doctor WHERE BMDC='$BMDC' AND doc_phone = '$doc_phone'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
   echo "You are Already Registered!!!";
   exit();
   }

			
		 else {
	$sql = mysql_query("INSERT INTO new_doctor(doc_name,designation,speciality,gender,doc_profile_pic,email,doc_phone,description,dgre_spc,username,password,BMDC,country,city,area,notify_to,new_p_f,return_p_f,report_f_f,first_cm_address,second_cm_address,third_cm_address)VALUES ('".$doc_name."','".$designation."','".$speciality."','".$gender."','".$fileName."','".$email."','".$doc_phone."','".$description."','".$dgre_spc."','".$username."','".$password."','".$BMDC."','".$country."','".$city."','".$area."','".$notify_to."','".$new_p_f."','".$return_p_f."','".$report_f_f."','".$first_cm_address."','".$second_cm_address."','".$third_cm_address."')") or die(mysql_error());
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

$bodyContent = '<h1> You have a New Doctor </h1>';
$bodyContent .= '<p>Doctors Name: </p>';
$bodyContent .= $doc_name;
$bodyContent .= '<p> Doctors Phone Number: </p>';
$bodyContent .= $doc_phone;
$bodyContent .= '<p>Doctors speciality </p>';
$bodyContent .= $speciality ;
$bodyContent .= '<p>gender </p>';
$bodyContent .= $gender ;
$bodyContent .= '<p>email: </p>';
$bodyContent .= $email ;
$bodyContent .= '<p> First Chamber Address: </p>';
$bodyContent .= $first_cm_address;



$mail->Subject = 'You have a New Doctor';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


			header("location:../thankyou.php");
		}
		else
		{
			echo "<script>alert('Error Occured Not Registered')</script>";
		}
	}
 ?>