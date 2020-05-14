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



$brand=$_GET['brand'];
$model=$_GET['model'];
$mob_condition=$_GET['mob_condition'];
$screen_size=$_GET['screen_size'];
$purchase_date=$_GET['purchase_date'];


$sql1="INSERT INTO item_mobile (item_id, subcat_id, user_id,
 brand, model, mob_condition, screen_size, purchase_date ) VALUES 
('$item_id','$scat_id', '$user_id',
'$brand', '$model', '$mob_condition','$screen_size,'$purchase_date')";
mysql_query($sql1, $dbObj);




?>