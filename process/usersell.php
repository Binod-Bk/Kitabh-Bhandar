<?php

include("../database/connection.php");
session_start();
$uid = $_SESSION['loginuser'];
$bname = $_POST['bname'];
$edition = $_POST['edition'];
$author = $_POST['author'];
$isbn = $_POST['isbn'];
$image = $_POST['image'];

echo "$bname.$edition.$author.$isbn.$image";

$sql = "INSERT INTO sold (bname,author,edition,isbn,image,uid) VALUES ('$bname','$author','$edition','$isbn','$image','$uid')";

if($conn->query($sql)){
    header("Location:../User/sellbook.php?msg=Book Sold has been Requested.");

}else{
    echo $conn->error;
}

?>