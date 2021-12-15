 
<?php

include('../database/connection.php');

$isbn = $_POST['isbn'];


if($_POST['action'] == 'details'){
        
        header("Location:../Admin/bookdetails.php?isbn=$isbn");

}elseif($_POST['action'] == 'delete'){
    $sql2 = "delete from book where isbn=$isbn";
    if($conn ->query($sql2)){
        
        header('Location:../Admin/gallery.php?msg=Deleted successfully');

    }else{
        echo $conn->error;
    }
}else{
echo $conn->error;
}


?>