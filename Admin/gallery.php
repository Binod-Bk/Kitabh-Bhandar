<?php
include('header.php');

?>

<style>

    body{
        background:#B0E0E6;
        font-family:monospace;
    }
    .container{
        display:flex;
        /* justify-content:center; */
        flex-wrap:wrap;
    }
    .card{
        background-color:#0047AB;
        width:280px;
        height:465px;
        margin:25px;
        border-radius:15px ;
    }
    .card_image{
        background-color:aqua;
        height:230px;
        background-size:cover;
        
    }
    .card_image img{
        position:relative;
        height:230px;
        width:280px;
        border-radius:15px 15px 0px 0px;
    }
    .card_body{
        font-size:14px;
    }
    .card_body input{
        display:block;
        width:94%;
    }
    button{
        position:relative;
        left:25px;
    }
    .deta{
        display:inline-block;
        background:green;
        margin-left:25px;
    }
    .rem{
        background:red;
    }
    </style>

<div class="container">
<?php
    include("../database/connection.php");
    $sql  = "SELECT * from book ";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            ?>
    <div class="card">
    <form action="../process/adminbookprocess.php" Method="POST">
        <div class="card_image">
        <img src="../Images/book_cover/<?php echo $row['image']; ?>" height="200px" width="200px" value="photo"class="img" ><br>
        <input type="hidden" value="<?php echo $row['image']; ?>" readonly="readonly" name="image" >
        </div>
        <div class="card_body">
        Name: <input type="text" value="<?php echo $row['name']; ?>" name="name" readonly="readonly"><br>
        Author: <input type="text" value="<?php echo $row['author'];  ?> " name="price" readonly="readonly"><br>
        <input type="hidden" value="<?php echo $row['edition'];  ?> " name="edition" readonly="readonly">
         <input type="hidden" value="<?php echo $row['publication'];  ?> " name="publication" readonly="readonly">
        <input type="hidden" value="<?php echo $row['isbn'];  ?> " name="isbn" readonly="readonly">
        <input type="hidden" value="<?php echo $row['release_date'];  ?> " name="release_date" readonly="readonly">
        Availability:<input type="text" value="<?php echo $row['availability'];  ?> " name="availability" readonly="readonly"><br>
            <button type="submit" name="action" value="details" class="deta">View Details</button>
            <button type="submit" name="action" value="delete" class="rem">Remove</button>
        
            </form>
        </div>
        
</div>
<?php
}
}else{
echo "<h2>No Records Found.</h2>";
}
?>

</div>
      
    
        
        
        
        
            
           
            











       
           
        
  