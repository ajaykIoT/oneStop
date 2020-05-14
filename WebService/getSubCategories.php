<?php
include 'Dbconnection.php';

$catid = $_GET['cat_id'];



$sql=mysql_query("SELECT * FROM subcategories WHERE cat_id='$catid'");
while ($row=mysql_fetch_array($sql)){
	$subcatid=$row['subcat_id'];
	$name=$row['scat_name'];
	$records=$row['sub_entries'];
	$ar2[]=array('subcat_id'=>$subcatid,'name'=>$name,'records'=>$records);
}
echo stripslashes(json_encode($ar2));

?>