<?php

$db = "kitabh";
$user = "root";
$password = "8080";
$host = "localhost";

$conn = new mysqli($host,$user,$password,$db);
if ($conn -> connect_error){
    echo "$conn->connect_error";
}




?>