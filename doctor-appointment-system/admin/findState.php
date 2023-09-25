<!-- ==============================================
//  Created by PHP Dev Zone           			 ||
//	http://php-dev-zone.com                      ||
//  Contact for any Web Development Stuff        ||
//  Email: ketan32.patel@gmail.com     			 ||
//=============================================-->


<?php
<?php require 'admin/link.php';
 $country=intval($_GET['country']);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db('test');
$query="SELECT id,statename FROM state WHERE countryid='$country'";
$result=mysql_query($query);

?>
<select name="city" onchange="getCity(<?php echo $country?>,this.value)">
<option>Select City</option>
<?php while ($row=mysql_fetch_array($result)) { ?>
<option value=<?php echo $row['id']?>><?php echo $row['city']?></option>
<?php } ?>
</select>
