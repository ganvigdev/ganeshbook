<?php
$conn = mysql_connect('localhost','ganeshbo_db','14Ove5G3I1q7') or die(mysql_error());
mysql_select_db('ganeshbo_sample',$conn);
$arrResult = mysql_fetch_object(mysql_query("select * from users where user_id=2"));
//Printing array
echo '<pre>';
print_r($arrResult);
?>