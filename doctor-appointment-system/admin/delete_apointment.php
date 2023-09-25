<?php 

	require 'link.php';
	if (isset($_REQUEST['delc']) && !empty($_REQUEST['delc'])) 
	{
		$deleteid = $_REQUEST['delc'];
		$sql = "DELETE FROM confirm_appointment WHERE id='".$deleteid."'";
		if (mysql_query($sql)) 
		{
			header("location:all_apointment.php");
		}
		else
		{
			echo "<script>alert('Error Occured Not Deleted')</script>";
		}
	}

 ?>