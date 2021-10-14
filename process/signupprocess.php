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

$query = "INSERT INTO user(email,fname,address,contact,security,answer,password,lname) values('$email','$fname','$address','$contact','$security','$answer','$password','$lname')";

if($conn->query($query)){

	echo "<script> alert('Sign Up Successfully. ');  
			window.location.href='../User/login.html';</script> " ;

}else{
	echo ("Error occur" . $conn -> error);
}





?>

