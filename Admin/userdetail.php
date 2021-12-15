
<?php

include('header.php');

?>

    <style>
         .container1{
            display:flex;
            background:#ADD8E6;
            height:90vh;
         }
         .container1 h1{
             position:relative;
             top:0%;
             left:39%;
             font-size:40px;
         }
         .card{
        margin-top:60px;
        margin-left:70px;
        display:inline-block;
        background:#DFCAA0;
        height:430px;
        width: 560px;
    }
    #but{
        border:1px blue solid;
        margin-left:170px;
        border-radius:5px;
        margin-top:5px;
        width:150px;
        background:green;
        color:white;
    }
    input{
        border:1px blue solid;
        padding:5px;
        margin: 10px;
        border-radius:5px;
        width:400px;

    }
    label{
        width:120px;
        display:inline-block;
        text-align:right;
        font-size:14px;
        color:blue;
    }
    .img{
        margin-left:200px;
    }
 
    </style>

<div class="container1">
        <h1>User Details</h1>
        <?php
    
    $id =$_POST['id'];
 include("../database/connection.php");
 $sql  = "SELECT * from user where id='$id'";
 $result = $conn->query($sql);
 if($result->num_rows > 0){
     while($row = $result->fetch_assoc()){
         ?>
 <div class="card">
 <form action="" Method="POST">
     <div class="card_image">
     <img src="../Images/<?php echo $row['image']; ?>" height="200px" width="200px" value="photo" class="img" ><br>
     <input type="hidden" value="<?php echo $row['image']; ?>" readonly="readonly" name="image" >
     </div>
     <div class="card_body">
         <!-- <input type="hidden" value="<?php echo $row['id']; ?>" name="uid"> -->
     <label for="name">Name :</label>
      <input type="text" value="<?php echo $row['fname']." ".$row['lname']; ?>" name="name"><br>
      <label for="name">Contact :</label>
      <input type="text" value="<?php echo $row['contact'];  ?> " name="coontact"><br>
      <label for="name">Email :</label>
      <input type="text" value="<?php echo $row['email'];  ?> " name="email" readonly="readonly"><br>
      <label for="name">Address :</label>
      <input type="text" value="<?php echo $row['address'];  ?>"> <br>
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

    </body>
    </html>