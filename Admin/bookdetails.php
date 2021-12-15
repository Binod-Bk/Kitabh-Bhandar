
<?php

include('header.php');

?>

    <style>
         .container1{
            display:flex;
            background:#ADD8E6;
            height:110vh;
         }
         .container1 h1{
             position:relative;
             top:0%;
             left:35%;
             font-size:40px;
         }
 
         .card{
        margin-top:60px;
        margin-left:20px;
        display:inline-block;
        background:#DFCAA0;
        height:550px;
        width: 570px;
    }
    #but{
        border:1px blue solid;
        margin-left:230px;
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
    .deta{
        
        background:green;
        margin-left:138px;
    }
    </style>

<div class="container1">
        <h1>Book Details</h1>

        <?php

            $isbn = $_GET['isbn'];
            include('../database/connection.php');

            $sql  = "SELECT * from book where isbn='$isbn'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    ?>
            <div class="card">
            <form action="../process/available.php" Method="POST">
                <div class="card_image">
                <img src="../Images/book_cover/<?php echo $row['image']; ?>" height="200px" width="200px" value="photo" class="img" ><br>
                <input type="hidden" value="<?php echo $row['image']; ?>" readonly="readonly" name="image" >
                </div>
                <div class="card_body">
                <label for="name">Name :</label>
                 <input type="text" value="<?php echo $row['name']; ?>" name="name"><br>
                 <label for="name">Author :</label>
                 <input type="text" value="<?php echo $row['author'];  ?> " name="author"><br>
                 <label for="name">Publication :</label>
                 <input type="text" value="<?php echo $row['publication'];  ?> " name="email" readonly="readonly"><br>
                 <label for="name">Edition :</label>
                 <input type="text" value="<?php echo $row['edition'];  ?>"> <br>
                 <label for="name">Release Date :</label>
                 <input type="text" value="<?php echo $row['release_date'];  ?>"> <br>
                 <label for="name">Category :</label>
                 <input type="hidden" value="<?php echo $row['isbn'];  ?>" name="isbn">
                 <input type="text" value="<?php echo $row['category'];  ?>"> <br>
                 <!-- <input type="submit" value="Make Available" class="deta"> -->
                 <button type="submit" class="deta">Make Available</button>
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