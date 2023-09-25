<?php
require 'link.php';
extract($_POST);

if(isset($submit))
{
    $all_game_value = implode(",",$_POST['test']);
    
        $ins_qry="INSERT INTO games(game_name) VALUES('".$all_game_value."')";
        mysql_query($ins_qry);
    }

?>

<form method="post" action="">
Test You Like: <br/>
    <input type="checkbox" name="test[]" value="Test 1" ><label>Test 1</label><br>
    <input type="checkbox" name="test[]" value="Test 2" ><label>Test 2</label><br>
    <input type="checkbox" name="test[]" value="Test 3" ><label>Test 3</label><br>
    <input type="checkbox" name="test[]" value="Test 4" ><label>Test 4</label><br>
    <input type="checkbox" name="test[]" value="Test 5" ><label>Test 5</label><br>
    <input type="checkbox" name="test[]" value="Test 6" ><label>Test 6</label><br>
    <input type="checkbox" name="test[]" value="Test 7" ><label>Test 7</label><br>
    <input type="checkbox" name="test[]" value="Test 8" ><label>Test 8</label><br><br>
    <input type="submit" name="submit" value="submit">
</form>