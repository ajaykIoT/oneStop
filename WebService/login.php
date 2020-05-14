<?php
include 'Dbconnection.php';

$uid  = urldecode($_POST['uid']);
$pass   = urldecode($_POST['pass']);
$status=0;



$email2="abc";
$password2="3";
$sql=mysql_query("SELECT * FROM user WHERE emailId='$uid'");
while($row = mysql_fetch_array($sql)) {
	$email2=$row['emailId'];
	$password2=$row['password'];
}

if (!($email2==$uid)){
	$message="Email Not Found";
	$ar1=array('status'=>$status,'message'=>$message);
}else if (!($pass==$password2)){

		$message="Incorrect Password";
		$ar1=array('status'=>$status,'message'=>$message);
	}
	else {
		$message="Successfully Login";
		$status=1;

		$sql=mysql_query("SELECT * FROM user WHERE emailId='$uid'");
		while($row = mysql_fetch_array($sql)) {
			$name=$row['name'];
			$address=$row['address'];
			$phone=$row['phone'];
			$state=$row['state'];
			$country=$row['country'];
		}
		
		$ar1=array('status'=>$status,'message'=>$message,'name'=>$name,'phone'=>$phone,'address'=>$address,'state'=>$state,'country'=>$country);
	}
	
	echo stripslashes(json_encode($ar1));


?>
