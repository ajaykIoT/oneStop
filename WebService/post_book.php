<?php
include 'Dbconnection.php';

$item_id=$_GET['item_id'];
$scat_id=$_GET['subcat_id'];
$user_id=$_GET['user_id'];
$book_name=$_GET['book_name'];
$author=$_GET['author'];
$type=$_GET['type'];
$edition=$_GET['edition'];
$published_year=$_GET['published_year'];




$post_date=$_GET['post_date'];
$description=$_GET['description'];
$selling_price=$_GET['selling_price'];
$rent_price=$_GET['rent_price'];



$sql1="INSERT INTO item_book (item_id, subcat_id, user_id, book_name, author, type, edition, published_year ) VALUES 
('$item_id','$scat_id', '$user_id','$book_name', '$author', '$type','$edition,'$published_year')";
mysql_query($sql1, $dbObj);


$sql2="INSERT INTO price_data (item_id, subcat_id, user_id, post_date, description, selling_price, rent_price ) VALUES
('$item_id','$scat_id', '$user_id','$post_date', '$description', '$selling_price','$rent_price')";

mysql_query($sql2, $dbObj);

?>