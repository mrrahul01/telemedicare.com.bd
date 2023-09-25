<?php 
	
session_start();
	$con = mysql_connect("localhost","awaazsup_rahul","tC^hTy.QEd4m") or die("Could Not Connect Your Server");
	if ($con) 
	{
		mysql_select_db("awaazsup_telemedicare_m_s",$con) or die("Could Not Connect Your DB");
	}


	if(isset($_SESSION["cart_products"])) //check session var
    {
		$total = 0; //set initial total value
		$b = 0; //var for zebra stripe table 
		foreach ($_SESSION["cart_products"] as $cart_itm)
        {
			//set variables to use in content below
			$test_name = $cart_itm["test_name"];
			// $all_test_value = implode(",",$test_name);
			$price = $cart_itm["price"];
			// $test_code = $cart_itm["test_code"];
			
			 $subtotal = $price;
		
			echo $test_name."-".$price;
			echo ",";
			$total = ($total + $subtotal);

			
			
			
        }
		echo "<br>";
		echo $total;
	}
echo "<br>";
$name = $test_name;

if (isset($_REQUEST['sign'])) 
	{
		if(isset($_SESSION["cart_products"])) //check session var
    {
		$total = 0; //set initial total value
		$b = 0; //var for zebra stripe table 
		foreach ($_SESSION["cart_products"] as $cart_itm)
        {
			//set variables to use in content below
			$test_name = $cart_itm["test_name"];
			// $all_test_value = implode(",",$test_name);
			$price = $cart_itm["price"];
			// $test_code = $cart_itm["test_code"];
			
			 $subtotal = $price;
			$ball = ($test_name+$cart_itm["test_name"]);
			echo $test_name."-".$price;
			echo ",";
			$total = ($total + $subtotal);
}
		
		$name = $ball;
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
		echo $name;
		$sql = mysql_query("INSERT INTO chkup_test (test,member_name,age,barth,testdate,testtime,gender,email,patient_phone,country,city,area,hospital,pmethod,marital,transitionID,paymentchkup) VALUES ('".$name."','".$member_name."','".$age."','".$barth."','".$testdate."','".$testtime."','".$gender."','".$email."','".$patient_phone."','".$country."','".$city."','".$area."','".$hospital."','".$pmethod."','".$marital."','".$transitionID."','".$paymentchkup."')") or die(mysql_error());
	}}
	
 ?>