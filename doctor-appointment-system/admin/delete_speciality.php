<?php 

	require 'link.php';
	if (isset($_REQUEST['delspc']) && !empty($_REQUEST['delspc'])) 
	{
		$deleteid = $_REQUEST['delspc'];
		$sql = "DELETE FROM speciality WHERE id='".$deleteid."'";
		if (mysql_query($sql)) 
		{
			header("location:view_all_speciality.php");
		}
		else
		{
			echo "<script>alert('Error Occured Not Deleted')</script>";
		}
	}

 ?>