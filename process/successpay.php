<?php

    include('../database/connection.php');
// echo "entered";
session_start();
$uid = $_SESSION['loginuser'];
$data=$_SESSION['cart'];

foreach($data as $arr){

    $bname = $arr[0];
    $price = $arr[5];
    $author = $arr[1];
    $isbn = $arr[2];
    $edition = $arr[3];
    $publication = $arr[4];
    $availability = "Not Available";
    $status = "pending";
    $date_rented = date("Y-m-d");
    $date_expire = date("Y-m-d",strtotime($date_rented. ' + 21 days'));

    $sql = "UPDATE book SET availability='$availability' where isbn='$isbn' ";
    $sql2 = "INSERT INTO history (bname,author,isbn,status,date_rented,date_submit,uid) values('$bname','$author','$isbn','$status','$date_rented','$date_expire','$uid')";
    $sql3 = "DELETE FROM cart WHERE isbn='$isbn' AND uid='$uid'";
    if($conn->query($sql)){
        if($conn->query($sql2)){
            if($conn->query($sql3)){
                header("location:../User/mycart.php?Paid Successfully.");
            }else{
                echo $conn->error;
            }
        }else{
            echo $conn->error;
        }
    }else{
        echo $conn->error;
    }
    
}
unset($_SESSION['cart']);




?>