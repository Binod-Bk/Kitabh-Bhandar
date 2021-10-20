<?php

include("../database/connection.php");


$name = $_POST['bname'];
$author = $_POST['author'];
$isbn = $_POST['isbn'];
$pubication = $_POST['publication'];
$edition = $_POST['edition'];
$release = $_POST['release'];
$image = $_POST['image'];
$category = $_POST['category'];

$sql = "INSERT INTO book values('$isbn','$name','$author','$pubication','$edition','$release','$image','$category')";

if($conn ->query($sql)){
    echo "<script> alert('Book Added Successfully. ');  
    window.location.href='../Admin/addbook.php';</script> " ;

}else{
echo ("Error occur" . $conn -> error);

}







?>