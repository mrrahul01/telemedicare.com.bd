<!-- ==============================================
//  Created by PHP Dev Zone           			 ||
//	http://php-dev-zone.com                      ||
//  Contact for any Web Development Stuff        ||
//  Email: ketan32.patel@gmail.com     			 ||
//=============================================-->

<?php
require 'admin/link.php'; 
 $countryId=intval($_GET['country']);
$stateId=intval($_GET['city']);

if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('test');
$query="SELECT id,city FROM city WHERE countryid='$countryId' AND stateid='$stateId'";
$result=mysql_query($query);

?>
<select name="city">
<option>Select Area</option>
<?php while($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['id']?>><?php echo $row['area']?></option>
<?php } ?>
</select>
