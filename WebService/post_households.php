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



$condition=$_GET['condition'];
$age=$_GET['age'];
$quantity=$_GET['quantity'];
$name=$_GET['name'];


$sql1="INSERT INTO other_households (item_id, subcat_id, user_id,
 item_condition, item_age, item_name, item_quantity ) VALUES 
('$item_id','$scat_id', '$user_id',
'$condition','$age', '$name', '$quantity')";
mysql_query($sql1, $dbObj);




?>