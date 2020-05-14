<?php
include 'Dbconnection.php';
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass=$_POST['pass'];
	$address = $_POST['add'];
	$state=$_POST['state'];
	$country = $_POST['country'];
	$contact=$_POST['contact'];
	$i=1;
	$status=0;
	$message="";
	
	
$sql2=mysql_query("SELECT * FROM user where emailId = '$email'");
while ($row=mysql_fetch_array($sql2)){
	$email2=$row['emailId'];
	$i=0;
}
	if ($i==1){
	$sql1="INSERT INTO user (name, emailId, password, phone, address, state, country) VALUES ('$name','$email','$pass','$contact', '$address','$state', '$country')
	";
	mysql_query($sql1, $dbObj);
	
	$status=1;
	$message="user registered successfully";
	

	}
	else {
		$status=0;
		$message="EmailId already exist in Database";
		
	}
	
	$ar1=array('status'=>$status,'message'=>$message);
	echo stripslashes(json_encode($ar1));
	
	?>


