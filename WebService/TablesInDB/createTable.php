<?php
$dbObj=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("onestop" , $dbObj);

$sql1="CREATE TABLE item_vehicle
    (item_id int  NOT NULL AUTO_INCREMENT,
		user_id int,
		subcat_id int,
		item_color varchar(50),
		item_mileage varchar(50),
		item_model varchar(50),
		item_capacity varchar(50),
		item_fuel_used varchar(50),
		item_brand varchar(50),
		item_name varchar(50)
		)";
mysql_query($sql1, $dbObj);

mysql_close($dbObj);

?>