<?php 

	require 'link.php';
	if (isset($_REQUEST['deltedinfo']) && !empty($_REQUEST['deltedinfo'])) 
	{
		$patient_deleteid = $_REQUEST['deltedinfo'];
		$sql = "DELETE FROM new_patient WHERE patient_id='".$patient_deleteid."'";
		if (mysql_query($sql)) 
		{
			header("location:view_all_patient.php");
		}
		else
		{
			echo "<script>alert('Error Occured Not Deleted')</script>";
		}
	}

 ?>