<?php

include('../database/connection.php');

session_start();
$id = $_SESSION['loginuser'] ;
$isbn = $_POST['isbn'];

$sql = "DELETE from cart where isbn='$isbn' ";

if($conn->query($sql)){
    header("location:../User/mycart.php");
}else{
    echo $conn->error;
}





?>