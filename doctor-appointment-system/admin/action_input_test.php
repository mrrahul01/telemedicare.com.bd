<?php 
$con = mysql_connect("localhost","awaazsup_rahul","tC^hTy.QEd4m") or die("Could Not Connect Your Server");
	if ($con) 
	{
		mysql_select_db("awaazsup_telemedicare_m_s",$con) or die("Could Not Connect Your DB");
	}
	

if (isset($_REQUEST['sign'])) 
	{
		$verifyimg = getimagesize($_FILES['image']['tmp_name']);

		if($verifyimg['mime'] != 'image/jpeg' && $verifyimg['mime'] != 'image/png'){
   		 echo "Only images are allowed!";
   		 exit;
			}
        $destination = 'test_images/';
        $fileName = $_FILES['image']['name'];
		$uploadfile = $destination . $fileName;


		$test_name = $_REQUEST['test_name'];
		$test_code = $_REQUEST['test_code'];
		$test_price = $_REQUEST['test_price'];
		move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
		
$sql = mysql_query("INSERT INTO health_test (test_code,test_name,price,test_image)VALUES ('".$test_code."','".$test_name."','".$test_price."','".$fileName."')" );
}
	
	else{
		
		echo "<div class='alert alert-danger'> Please provide the correct information </div>";
	}

 ?>