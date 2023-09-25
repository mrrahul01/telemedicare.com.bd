<?php 

	require 'link.php';
	if (isset($_REQUEST['deletedinfo']) && !empty($_REQUEST['deletedinfo'])) 
	{
		$chkdelete = $_REQUEST['deletedinfo'];
		$sql = "DELETE FROM chkup_test WHERE id='".$chkdelete."'";
		if (mysql_query($sql)) 
		{
			header("location:checkup_test.php");
		}
		else
		{
			echo "<script>alert('Error Occured Not Deleted')</script>";
		}
	}

 ?>