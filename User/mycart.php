<?php
include('header.php');

?>

<style>

    body{
        background:#B0E0E6;
        font-family:monospace;
    }
    .container{
        width:800px;
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
    section{
        padding:0px;
        width:1280px;
        margin:10px auto;
    }
    section ul{
        display:flex;
        margin-bottom:0px;
        
    }
    section ul li{
        list-style:none;
        background: black;
        padding:4px 6px;
        margin:7px;
        letter-spacing:1px;
        cursor:pointer;
    }
    /* .list a{
        color:black;
    } */
    
    section ul li:hover{
        background:white;
        color:black;
    }
    .list a:hover{
        color:black;
        text-decoration:none;
    }

    .main_content{
        display:flex;   
    }
    .details{
        /* display:inline-block; */
        margin-left:50px;
    }
    .container table{
        width:750px;
        border: 2px solid black;
        text-align:center;
        margin-bottom:0;
        margin-top:50px;
        background:#F6E3BA;
        border-radius:10px 10px 0px 0px;
    }
    .bill table{
        width:500px;
        border: 2px solid black;
        text-align:center;
        margin-bottom:0;
        background:#F6E3BA;
        border-radius:10px 10px 0px 0px;
    }
    .details th{
        font-size:18px;
        text-align:center;
        border: 2px solid black;
        background:#DFCAA0;
    }
    .bill th{
        width:600px;
        font-size:18px;
        text-align:center;
        border: 2px solid black;
        background:#DFCAA0;
        float:center;
    }
    td{
        padding:10px;
        
    }
    #line{
        border-left:2px solid black;
        border-right:2px solid black;
        
    }
    #line2{
        border-right:2px solid black;
    }
    #but{
        margin-left:180px;
        margin-top:10px;
        width:80px;
        height:20px;
        background:green;
        color:white;
        border-radius:5px;

    }
    #esewa{
        margin-left:200px;
        margin-top:8px;
        width:150px;
        height:23px;
        background:green;
        color:white;
        border-radius:5px;
    }
    .myform{
        background:red;
        color:red;
        width:50px;
    }
    .foresewa{
        margin-top:0;
        width:496px;
        height:36px;
        background:#DFCAA0;
        border:2px black solid;
        border-radius:0px 0px 10px 10px;

    }
    .bill{
        float:left;
        margin-left:826px;
        
    }
    #cancel{
        color:red;
        background:transparent;
    }
   h1{
       text-align:center;
       color:blue;
       font-size: 30px;
   }
   
    </style>

<h1>My Cart</h1>
<div class="container">

<?php
           session_start();
           $uid = $_SESSION['loginuser'] ;
    include('../database/connection.php');
    $q = "SELECT * from cart where uid='$uid'"; 
    $p = "SELECT sum(price) as sum from cart where uid='$uid'";
    $total_bill = $conn->query($p);
    if ($conn->query($q)){
    $result = $conn->query($q);
    
    if($result-> num_rows >0){
        
            ?>

            <table>
                <tr>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Edition</th>
                    <th>Publication</th>
                    <th>Rent Charge(Rs.)</th>
                    <th>Action</th>
                </tr>
                <?php while($row=$result->fetch_assoc())
        {  ?>
                <tr>
                <td><?php echo $row['bname'];  ?></td>
                <td id="line"><?php echo $row['author'];  ?></td>
                <td id="line2"><?php echo $row['edition'];  ?></td>
                <td id="line2"><?php echo $row['publication'];  ?></td>
                <td id="line2"><?php echo $row['price'];  ?></td>
                <td><form action="../process/cancel.php" method="post" name="myform">
                        <input type="hidden" value="<?php echo $row['isbn']?>" name="isbn">
                        <input type="submit" value="Cancel" id="cancel">            
            </form></td>
                </tr>
                <?php } ?>
              <tr> 
                  
        </tr>
            </table>
            <!-- <form action="#" method="post">
            <button type="submit" id="but">Get Bill</button>
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="name"><br>
                    <input type="hidden" value="<?php echo $row['name']; ?>" name="name"><br>
                    <input type="hidden" value="<?php echo $row['price']; ?>" name="name" ><br>
                    <input type="hidden" value="<?php echo $row['ordered']; ?>" name="name"><br>
                    
                </form> -->
            <?php
        
    }else{
        echo "<h2>No Records found<h2>";
    }
}else{
    echo $conn->error;
}
    ?>
    </div>

    <div class="bill">
    <?php
    session_start();
    $uid = $_SESSION['loginuser'] ;
    include('../database/connection.php');
    $q = "SELECT * from cart where uid='$uid'";
    if ($conn->query($q)){
    $result = $conn->query($q);
    
    if($result-> num_rows >0){
        
            ?>

            <table>
                <tr>
                    <th>Bills :</th>
                </tr>
                <?php while($row=$result->fetch_assoc())
                
        { 
            
            ?>
                <tr>
                <td><?php echo $row['bname'];  ?></td>
                <td><?php echo "Rs.".$row['price'];  ?></td>
                </tr>
                <?php } ?>
              <tr> 
                  
        </tr>
        <?php while($row2=$total_bill->fetch_assoc()){   ?>
        <tr>
           
            <th>Total Amount : <?php  echo $row2['sum']; ?></th>
            
        </tr>
            </table>

            <?php 
                    $total_bill = $row2['sum']; 
                    
                    $total_amount = $total_bill + 10 +15+50;
                    $pid = rand();
                    $success = 'http://localhost/kitab/process/successpay.php';
                ?>

            <form action="https://uat.esewa.com.np/epay/main" method="POST" class="foresewa">
    <input value="<?php  echo $total_amount; ?>" name="tAmt" type="hidden">
    <input value="<?php  echo $total_bill; ?>" name="amt" type="hidden">
    <input value="Pay With eSewa" type="submit" id="esewa">
    <input value="15" name="txAmt" type="hidden">
    <input value="10" name="psc" type="hidden">
    <input value="50" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="<?php  echo $pid; ?>" name="pid" type="hidden">
    <input value="<?php echo $success ?>" type="hidden" name="su">
    <input type="hidden" value="<?php echo $row['id']; ?>" name="id"><br>
    <input type="hidden" value="<?php echo $row['name']; ?>" name="name"><br>
    <input type="hidden" value="<?php echo $row['price']; ?>" name="price" ><br>
    <input type="hidden" value="<?php echo $row['ordered']; ?>" name="ordered"><br>
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
    </form>
    <?php } ?>
           
            <?php
        
    }else{
        echo "<h2>No Records found<h2>";
    }
}else{
    echo $conn->error;
}
    ?>

</div>

      
    
        
        
        
        
            
           
            











       
           
        
  