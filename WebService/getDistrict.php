<?php
include 'Dbconnection.php';


$state=$_GET['state'];

$sql=mysql_query("SELECT District FROM user_location WHERE State = '$state'");
while ($row=mysql_fetch_array($sql)){
	$dis=$row['District'];
	
	$ar2[]=array('District'=>$dis);
	
}
echo stripslashes(json_encode($ar2));

?>