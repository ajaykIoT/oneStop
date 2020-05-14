<?php

include 'Dbconnection.php';

$item_id=$_GET['item_id'];
$scat_id=$_GET['subcat_id'];
$user_id=$_GET['user_id'];

$post_date=$_GET['post_date'];
$description=$_GET['description'];
$selling_price=$_GET['selling_price'];
$rent_price=$_GET['rent_price'];


$sql2="INSERT INTO price_data (item_id, subcat_id, user_id, post_date, description, selling_price, rent_price ) VALUES
('$item_id','$scat_id', '$user_id','$post_date', '$description', '$selling_price','$rent_price')";
mysql_query($sql2, $dbObj);



$color=$_GET['color'];
$mileage=$_GET['mileage'];
$model=$_GET['model'];
$capacity=$_GET['capacity'];
$fuel_used=$_GET['fuel_used'];
$brand=$_GET['brand'];
$name=$_GET['name'];


$sql1="INSERT INTO item_vehicle (item_id, subcat_id, user_id,
 item_color, item_mileage, item_model, item_capacity, item_fuel_used, item_brand, item_name ) VALUES 
('$item_id','$scat_id', '$user_id',
'$color','$mileage', '$model', '$capacity','$fuel_used,'$brand','$name')";
mysql_query($sql1, $dbObj);




?>