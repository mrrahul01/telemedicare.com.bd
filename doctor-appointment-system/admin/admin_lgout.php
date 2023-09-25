<?php 
   session_start();
if ($_REQUEST['lgot'] && !empty($_REQUEST['lgot']))
	 {
	 	session_destroy();
	 	header("location:../logoutthanks.php");
	 }
	 else{
	 	echo "No logout id";
	 }
	 exit();
  ?>