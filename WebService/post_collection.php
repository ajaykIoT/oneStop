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


$type=$_GET['type'];
$age=$_GET['age'];
$condtion=$_GET['condition'];
$speciality=$_GET['speciality'];


$sql1="INSERT INTO item_collection (item_id, subcat_id, user_id, 

type,age,condition,speciality) 
VALUES ('$item_id','$scat_id', '$user_id',

'$type', '$age','$condtion', '$speciality')";
mysql_query($sql1, $dbObj);




?>