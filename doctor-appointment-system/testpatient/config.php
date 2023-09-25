<?php

$db_username = 'awaazsup_rahul';
$db_password = 'tC^hTy.QEd4m';
$db_name = 'awaazsup_telemedicare_m_s';
$db_host = 'localhost';
					
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>