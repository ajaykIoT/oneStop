<?php

include 'Dbconnection.php';

$sql=mysql_query("SELECT * FROM states_india");
while ($row=mysql_fetch_array($sql)){
	$state=$row['State'];
	$ar2[]=array('state'=>$state);
}
echo stripslashes(json_encode($ar2));

?>