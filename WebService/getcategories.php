<?php

include 'Dbconnection.php';

$sql=mysql_query("SELECT * FROM categories");
while ($row=mysql_fetch_array($sql)){
	$catid=$row['cat_id'];
	$name=$row['name'];
	$records=$row['entries'];
	$ar2[]=array('catId'=>$catid,'category'=>$name,'records'=>$records);
}
echo stripslashes(json_encode($ar2));

?>