<?php
include 'Dbconnection.php';

$subcatid=$_GET['subcat_id'];


if (empty($subcatid)){
	echo " Sub category id are required";
}

else {

$sql2=mysql_query("SELECT * FROM subcategories WHERE subcat_id='$subcatid'");
while ($row=mysql_fetch_array($sql2)){
	$catid=$row['cat_id'];
	$record2=$row['sub_entries'];
}
$record2=$record2+1;

$sql3="UPDATE subcategories SET sub_entries='$record2' WHERE subcat_id='$subcatid'";

mysql_query($sql3, $dbObj);



$sql=mysql_query("SELECT entries FROM categories WHERE cat_id='$catid'");
while ($row=mysql_fetch_array($sql)){
	$record=$row['entries'];
}
$record=$record+1;

$sql1="UPDATE categories SET entries='$record' WHERE cat_id='$catid'";

mysql_query($sql1, $dbObj);

echo "Values updated";
}

?>