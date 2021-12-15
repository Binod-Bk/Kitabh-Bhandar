<?php


$id = $_POST['id'];
$isbn = $_POST['isbn'];


include("../database/connection.php");

$sql = "UPDATE history SET status='Delivered' where hid='$id' AND isbn='$isbn' ";
if($conn->query($sql)){
    header("location:../Admin/ordered_books.php?Item Delivered Successfully.");
}else{
    echo $conn->error;
}




?>