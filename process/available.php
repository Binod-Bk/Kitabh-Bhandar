<?php

include("../database/connection.php");

$isbn = $_POST['isbn'];

$sql = "UPDATE book SET availability='Available' where isbn='$isbn'";

if($conn->query($sql)){
    header("Location:../Admin/gallery.php?msg=Book is Now Available.");
}else{
    echo $conn->error;
}


?>