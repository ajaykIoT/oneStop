<?php
include 'Dbconnection.php';

$scat=$_GET['scat_id'];

$item_id=0;
$user_id=0;

if ($scat==1||$scat==2){
	$sql=mysql_query("SELECT * FROM item_furniture WHERE subcat_id ='$scat'");
	while($row = mysql_fetch_array($sql)) {
		$item_id=$row['item_id'];
		$user_id=$row['user_id'];
		$item_condition=$row['item_condition'];
		$item_age=$row['item_age'];
		$furniture_type=$row['furniture_type'];
		$item_details=[
			"item_id"=>$item_id,
			"item_condition"=>$item_condition,
			"item_age"=> $item_age,
			"item_type"=> $furniture_type,
			];
		$userData=userDtails($user_id)	;
		$priceData=priceDetails($user_id, $scat, $item_id);
		$rValue[]=array(
		"ItemDetail"=>$item_details,
		"UserDetails"=>$userData,
		"PriceDetails"=>$priceData
		);
	}
	
	
	
	
}


elseif ($scat==3){
	//Table item_fridge_washing_ac
	
	$sql4=mysql_query("SELECT * FROM item_fridge_washing_ac WHERE subcat_id ='$scat'");
	while($row = mysql_fetch_array($sql4)) {
		$item_id=$row['item_id'];
		$user_id=$row['user_id'];
		$item_condition=$row['item_condition'];
		$item_age=$row['item_age'];
		$type=$row['type'];
		$quantity=$row['quantity'];
		
		$item_details=[
		"item_id"=>$item_id,
		"item_condition"=>$item_condition,
		"item_age"=> $item_age,
		"item_type"=> $type,
		"quantity"=>$quantity
		];
		$userData=userDtails($user_id)	;
		$priceData=priceDetails($user_id, $scat, $item_id);
		$rValue[]=array(
				"ItemDetail"=>$item_details,
				"UserDetails"=>$userData,
				"PriceDetails"=>$priceData
		);
	}
	
	
}

elseif ($scat==4||$scat==5||$scat==6){
	//Table other_household
	
	$sql5=mysql_query("SELECT * FROM other_households WHERE subcat_id ='$scat'");
	while($row = mysql_fetch_array($sql5)) {
		$item_id=$row['item_id'];
		$user_id=$row['user_id'];
		$item_condition=$row['item_condition'];
		$item_age=$row['item_age'];
		$item_name=$row['item_name'];
		$quantity=$row['item_quantity'];
	
		$item_details=[
		"item_id"=>$item_id,
		"item_condition"=>$item_condition,
		"item_age"=> $item_age,
		"item_name"=> $item_name,
		"quantity"=>$quantity
		];
		$userData=userDtails($user_id)	;
		$priceData=priceDetails($user_id, $scat, $item_id);
		$rValue[]=array(
				"ItemDetail"=>$item_details,
				"UserDetails"=>$userData,
				"PriceDetails"=>$priceData
		);
	}
	
	
	
}

elseif ($scat>=7&&$scat<=12){
// 	Table item_vehicle

	$sql6=mysql_query("SELECT * FROM other_households WHERE subcat_id ='$scat'");
	while($row = mysql_fetch_array($sql6)) {
		$item_id=$row['item_id'];
		$user_id=$row['user_id'];
		$item_color=$row['item_color'];
		$item_mileage=$row['item_mileage'];
		$item_model=$row['item_model'];
		$quantity=$row['item_quantity'];
	
		$item_details=[
		"item_id"=>$item_id,
		"item_condition"=>$item_condition,
		"item_age"=> $item_age,
		"item_name"=> $item_name,
		"quantity"=>$quantity
		];
		$userData=userDtails($user_id)	;
		$priceData=priceDetails($user_id, $scat, $item_id);
		$rValue[]=array(
				"ItemDetail"=>$item_details,
				"UserDetails"=>$userData,
				"PriceDetails"=>$priceData
		);
	}
	
	
	
	
}

elseif ($scat==13){
	
// 	item_book
	
	$sql7=mysql_query("SELECT * FROM item_book WHERE subcat_id ='$scat'");
	while($row = mysql_fetch_array($sql7)) {
		$item_id=$row['item_id'];
		$user_id=$row['user_id'];
		$book_name=$row['book_name'];
		$author=$row['author'];
		$book_type=$row['type'];
		$edition=$row['edition'];
		$publication=$row['published_year'];
		
		$item_details=[
		"item_id"=>$item_id,
		"book_name"=>$book_name,
		"author"=> $author,
		"book_type"=> $book_type,
		"edition"=>$edition,
		"published_year"=>$publication
		];
		$userData=userDtails($user_id)	;
		$priceData=priceDetails($user_id, $scat, $item_id);
		$rValue[]=array(
				"ItemDetail"=>$item_details,
				"UserDetails"=>$userData,
				"PriceDetails"=>$priceData
		);
	
}
}
elseif ($scat==18||$scat==19||$scat==20){
	
// 	item_mobile

	$sql8=mysql_query("SELECT * FROM item_mobile WHERE subcat_id ='$scat'");
	while($row = mysql_fetch_array($sql8)) {
		$item_id=$row['item_id'];
		$user_id=$row['user_id'];
		$brand=$row['brand'];
		$model=$row['mob_condition'];
		$screen_size=$row['screen_size'];
		$purchase_date=$row['purchase_date'];

		$item_details=[
		"item_id"=>$item_id,
		"brand"=>$brand,
		"model"=> $model,
		"screen_size"=> $screen_size,
		"purchase_date"=>$purchase_date
		];
		$userData=userDtails($user_id)	;
		$priceData=priceDetails($user_id, $scat, $item_id);
		$rValue[]=array(
				"ItemDetail"=>$item_details,
				"UserDetails"=>$userData,
				"PriceDetails"=>$priceData
		);
	}
	
}

elseif ($scat==21){

	// 	item_camera

	$sql9=mysql_query("SELECT * FROM item_camera WHERE subcat_id ='$scat'");
	while($row = mysql_fetch_array($sql9)) {
		$item_id=$row['item_id'];
		$user_id=$row['user_id'];
		$brand=$row['brand'];
		$model=$row['mob_condition'];
		$camera_type=$row['camera_type'];
		$zooming=$row['zooming'];
		$purchase_date=$row['purchase_date'];

		$item_details=[
		"item_id"=>$item_id,
		"brand"=>$brand,
		"model"=> $model,
		"camera_type"=> $camera_type,
		"purchase_date"=>$purchase_date,
		"zooming"=>$zooming
		];
		$userData=userDtails($user_id)	;
		$priceData=priceDetails($user_id, $scat, $item_id);
		$rValue[]=array(
				"ItemDetail"=>$item_details,
				"UserDetails"=>$userData,
				"PriceDetails"=>$priceData
		);
	}

}


function userDtails($userId) {
	
	$sql2=mysql_query("SELECT * FROM user WHERE user_id ='$userId'");
	while($row = mysql_fetch_array($sql2)) {
		$name=$row['name'];
		$email=$row['emailId'];
		$phone=$row['phone'];
		$address=$row['address'];
		$state=$row['state'];
		$country=$row['country'];
		
		$user=[
			"name"=>$name,
			"email"=>$email,
			"phone"=>$phone,
			"address"=>$address,
			"state"=>$state,
			"country"=>$country,
		];
	}	
	return $user;
}

function priceDetails($userId,$scatId,$itemId ) {
	$sql3=mysql_query("SELECT * FROM price_data WHERE (user_id ='$userId' AND subcat_id='$scatId' AND item_id='$itemId')");
	while($row = mysql_fetch_array($sql3)) {
		$postdate=$row['post_date'];
		$description=$row['description'];
		$sellprice=$row['selling_price'];
		$rentprice=$row['rent_price'];
		
		$price=[
			"Post Date"=>$postdate,
			"Description"=>$description,
			"Selling Price"=>$sellprice,
			"Rent Price"=>$rentprice,
		];
	}
	
	return $price;

}
?>