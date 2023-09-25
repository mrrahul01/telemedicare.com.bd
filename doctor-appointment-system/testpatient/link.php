<?php 
	$con = mysql_connect("localhost","awaazsup_rahul","tC^hTy.QEd4m") or die("Could Not Connect Your Server");
	if ($con) 
	{
		mysql_select_db("awaazsup_telemedicare_m_s",$con) or die("Could Not Connect Your DB");
	}
 ?>