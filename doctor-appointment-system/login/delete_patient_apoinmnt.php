<?php 

	require 'link.php';
	if (isset($_REQUEST['delp']) && !empty($_REQUEST['delp'])) 
	{
		$deleteid = $_REQUEST['delp'];
		$sql = "DELETE FROM confirm_appointment WHERE id='".$deleteid."'";
		if (mysql_query($sql)) 
		{
			header("location:doctor_view_daily_appoinment.php");
		}
		else
		{
			echo "<script>alert('Error Occured Not Deleted')</script>";
		}
	}

 ?>