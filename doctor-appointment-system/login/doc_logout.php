<?php 
   session_start();
if ($_REQUEST['dclgot'] && !empty($_REQUEST['dclgot']))
	 {
	 	session_destroy();
	 	header("location:../logoutthanks.php");
	 }
	 else{
	 	echo "No logout id";
	 }
	 exit();
  ?>