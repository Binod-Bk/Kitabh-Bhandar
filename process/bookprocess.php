<?php

include('../database/connection.php');
session_start();
$uid = $_SESSION['loginuser'];

$bname = $_POST['name'];
$author = $_POST['author'];
$isbn  =  $_POST['isbn'];
$edition = $_POST['edition'];
$publication = $_POST['publication'];
$price = 250;




if($_POST['action']=='details'){

    header("Location:../User/bookdetails.php?isbn=$isbn");

    
}elseif($_POST['action']=='cart'){

    if(!isset($_SESSION['cart'])){
        $newData=array($bname,$author,$isbn,$edition,$publication,$price);
        $cart=array();
        array_push($cart,$newData);
        $_SESSION['cart']=$cart;
        
    }else{
        
        $cart=$_SESSION['cart'];
        $newData=array($bname,$author,$isbn,$edition,$publication,$price);
       array_push($cart,$newData);
       $_SESSION['cart']=$cart;
        print_r($_SESSION['cart']);
        
    }



    $sql ="INSERT INTO cart(bname,author,isbn,edition,publication,price,uid) VALUES('$bname','$author','$isbn','$edition','$publication','$price','$uid')";
    if($conn->query($sql)){
            header("Location:../User/gallery.php?msg=Added to Cart Successfully.");
        }else{
            echo $conn->error;
        }

}else{
    echo "Hello".$conn->error;
}


?>