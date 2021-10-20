<?php

include("../database/connection.php");
if($_SERVER['REQUEST_METHOD']=='POST'){

$email = $_POST['email'];
$password = $_POST['pass'];


$sql = "SELECT * from user where email='$email'";
$result = $conn->query($sql);
if($result->num_rows==1){
    $row=$result->fetch_assoc();
        if($row['password'] == $password){
            header("Location:../User/home.php");
        }else{
            header("Location:../User/login.php?msg=Incorrect Password. Please Try Again.");    
        }   
    
}else{
    header("Location:../User/login.php?msg=No Registered User With Given Email.");
}
}else{
    echo "form must in post method";
}




?>