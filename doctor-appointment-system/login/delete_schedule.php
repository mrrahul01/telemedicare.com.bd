<?php 

	require 'link.php';
	if (isset($_REQUEST['delc']) && !empty($_REQUEST['delc'])) 
	{
		$deleteid = $_REQUEST['delc'];
		$sql = "DELETE FROM apoin_schedule WHERE id='".$deleteid."'";
		if (mysql_query($sql)) 
		{
			header("location:doc_view_schedule.php");
		}
		else
		{
			echo "<script>alert('Error Occured Not Deleted')</script>";
		}
	}

 ?>