<?php
$dbObj=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("onestop" , $dbObj);

$sql1="CREATE TABLE itemvehicle
    (	item_id int  NOT NULL AUTO_INCREMENT,
		user_id int,
		)";
mysql_query($sql1, $dbObj);

mysql_close($dbObj);

?>