<?php 


include("../database/connection.php");


$email = $_POST['email'];
$fname = $_POST['first'];
$lname = $_POST['last'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$password= $_POST['password'];
$security = $_POST['security'];
$answer = $_POST['answer'];

$query = "INSERT INTO user(email,fname,lname,address,contact,security,answer,password) values('$email','$fname','$lname','$address','$contact','$security','$answer','$password')";

if($conn->query($query)){

	header("Location:../User/login.php?sms=Sign Up Successfull. Try Loggin Now.");
}else{
	echo ("Error occur" . $conn -> error);
}





?>

