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



$title=$_GET['title'];
$brand=$_GET['brand'];
$duration=$_GET['duration'];
$type=$_GET['type'];

$sql1="INSERT INTO item_cd (item_id, subcat_id, user_id, 
Title, brand, duration, type ) 
VALUES ('$item_id','$scat_id', '$user_id', '$title','$brand', '$duration', '$type')";
mysql_query($sql1, $dbObj);




?>