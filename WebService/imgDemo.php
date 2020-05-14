<?php   
include 'Dbconnection.php';

//This is the directory where images will be saved
  $target = "images/"; 
  $target = $target . basename( $_FILES['photo']['name']);
  //This gets all the other information from the form  
  $name=$_POST['name'];  
  $email=$_POST['email'];  
  $phone=$_POST['phone'];  
  $pic=($_FILES['uploadedfile']['name']);   
  // Connects to your Database  
  
  //Writes the information to the database  
  $pname= 'C:/xampp/htdocs/OneStop/images//'.$pic;
  mysql_query("INSERT INTO `employees` VALUES ('$name', '$email', '$phone', '$pname')") ;   
  //Writes the photo to the server  
  if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))  {   
  	//Tells you if its all ok 
  	$file="images/".$_FILES["uploadedfile"]["name"];
  	mysql_query("INSERT INTO `employees` VALUES ('$name', '$email', '$phone', '$pname')") ;
  	
  	echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";  
  }  
  else { 
  	//Gives and error if its not  
  	echo "Sorry, there was a problem uploading your file.";  
  }  

?>