<?php

include("../database.connection.php");

$bname = $_POST['bname'];
$edition = $_POST['edition'];
$author = $_POST['author'];
$isbn = $_POST['isbn'];
$image = $_POST['image'];

echo "$bname.$edition.$author.$isbn.$image";

$sql = "INSERT INTO "






?>