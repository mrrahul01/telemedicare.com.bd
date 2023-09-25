<?php 
   session_start();
if ($_REQUEST['patient_lgot'] && !empty($_REQUEST['patient_lgot']))
	 {
	 	session_destroy();
	 	header("location:../logoutthanks.php");
	 }
	 else{
	 	echo "No logout id";
	 }
	 exit();
  ?>