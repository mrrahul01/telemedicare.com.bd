<?php 
	require 'link.php';
	if (isset($_REQUEST['submit'])) 
	{
		$fileName = $_FILES['doc_profile_pic']['name'];
        $fileType = $_FILES['doc_profile_pic']['type'];
        $fileSize = $_FILES['doc_profile_pic']['size'];
        $destination = 'doctor_image/';

		$doc_name = $_REQUEST['doc_name'];
		$designation = $_REQUEST['designation'];
		$speciality = $_REQUEST['speciality'];
		$gender = $_REQUEST['gender'];
		$email = $_REQUEST['email'];
		$doc_phone = $_REQUEST['doc_phone'];
		$description = $_REQUEST['description'];
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
		// $aapoin_time = $_REQUEST['apoin_time'];
		 // $apoin_time = implode(',', $_POST['apoin_time']);

        
        if (move_uploaded_file($_FILES['doc_profile_pic']['tmp_name'], $destination.$fileName)) 
        {                                                                                                                                                                                        
           	$sql = mysql_query("INSERT INTO new_doctor(doc_name,designation,speciality,gender,doc_profile_pic,email,doc_phone,description,country,city,area,notify_to,new_p_f,return_p_f,report_f_f,first_cm_address,second_cm_address,third_cm_address)VALUES ('".$doc_name."','".$designation."','".$speciality."','".$gender."','".$fileName."','".$email."','".$doc_phone."','".$description."','".$country."','".$city."','".$area."','".$notify_to."','".$new_p_f."','".$return_p_f."','".$report_f_f."','".$first_cm_address."','".$second_cm_address."','".$third_cm_address."')") or die(mysql_error());
		if ($sql)
		 {
			header("location:add_new_doctor.php");
		}
		else
		{
			echo "This is not working";
		}
        }
	
	}
 ?>