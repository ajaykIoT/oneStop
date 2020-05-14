<?php
include 'Dbconnection.php';


$item_id=$_GET['item_id'];
$scat_id=$_GET['subcat_id'];
$user_id=$_GET['user_id'];

$post_date=$_GET['post_date'];
$description=$_GET['description'];
$selling_price=$_GET['selling_price'];
$rent_price=$_GET['rent_price'];


$dbObj=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("onestop" , $dbObj);

$sql2="INSERT INTO price_data (item_id, subcat_id, user_id, post_date, description, selling_price, rent_price ) VALUES
('$item_id','$scat_id', '$user_id','$post_date', '$description', '$selling_price','$rent_price')";
mysql_query($sql2, $dbObj);


$condtion=$_GET['condition'];
$age=$_GET['age'];
$type=$_GET['type'];
$quantity=$_GET['quantity'];


$sql1="INSERT INTO item_fridge_washing_ac (item_id, subcat_id, user_id, 

item_condition, item_age, type, quantity) 
VALUES ('$item_id','$scat_id', '$user_id',

'$condtion', '$age','$type', '$quantity')";
mysql_query($sql1, $dbObj);




?>