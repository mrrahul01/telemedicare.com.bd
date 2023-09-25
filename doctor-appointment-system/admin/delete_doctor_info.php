<?php 

	require 'link.php';
	if (isset($_REQUEST['deldinfo']) && !empty($_REQUEST['deldinfo'])) 
	{
		$doc_deleteid = $_REQUEST['deldinfo'];
		$sql = "DELETE FROM new_doctor WHERE id='".$doc_deleteid."'";
		if (mysql_query($sql)) 
		{
			header("location:view_all_doctor.php");
		}
		else
		{
			echo "<script>alert('Error Occured Not Deleted')</script>";
		}
	}

 ?>