<?php
include('header.php');

?>

<style>

    body{
        background:#B0E0E6;
        font-family:monospace;
    }
    .container{
        width:1350px;
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
        width:1300px;
        border: 2px solid black;
        text-align:center;
        margin-bottom:0;
        margin-top:50px;
        margin-left:30px;
        background:#F6E3BA;
        border-radius:10px 10px 0px 0px;
        font-size:16px;
    }
   
    td{
        padding:10px;
        
    }
    .line{
        
        border-right:2px solid black;
        
    }
    .line2{
        border-right:2px solid black;
        border-bottom:2px solid black;
    }
    .line3{

        border-bottom:2px solid black;
    }
    h1{
       text-align:center;
       color:blue;
       font-size: 30px;
   }
   
   #submit{
        color:green;
        background:transparent;
    }
    #submit2{
        
        color:blue;
        background:transparent;

    }
   
   
    </style>

<h1>My History</h1>
<div class="container">

<?php
    session_start();
    $uid = $_SESSION['loginuser'];
    include('../database/connection.php');
    $q = "SELECT * from history INNER JOIN user where history.uid=user.id ORDER BY date_rented DESC";
    if ($conn->query($q)){
    $result = $conn->query($q);
    
    if($result-> num_rows >0){
        
            ?>

            <table>
                <tr>
                     <th class="line2">User Name</th>
                    <th class="line2">Email</th>
                    <th class="line2">Book Name</th>
                    <th class="line2">Author</th>
                    <th class="line2">ISBN</th>
                    <th class="line2">Status</th>
                    <th class="line2">Date Rented</th>
                    <th class="line2">Date To Be Submitted</th>
                    <th class="line3">Action</th>
                </tr>
                <?php while($row=$result->fetch_assoc())
        {  ?>
                <tr>
                    <td class="line"><?php echo $row['fname']. $row['lname'];  ?></td>
                    <td class="line">
                    <form action="userdetail.php" method="POST">
                        <input type="hidden" value=<?php echo $row['id'];?> name="id">
                        <input type="submit" value="<?php echo $row['email'];  ?>" id="submit2" >
                    </form>

                </td>

                <td class="line"><?php echo $row['bname'];  ?></td>
                <td class="line"><?php echo $row['author'];  ?></td>
                <td class="line"><?php echo $row['isbn'];  ?></td>
                <td class="line"><?php echo  $row['status'];?></td>
                <td class="line"><?php echo $row['date_rented'];  ?></td>
                <td class="line"><?php echo $row['date_submit'];  ?></td>
                <td>
                    <form action="../process/delivered.php" method="POST">
                        <input type="hidden" value=<?php echo $row['hid'];?> name="id">
                        <input type="hidden" value=<?php echo $row['isbn'];?> name="isbn">
                        <input type="submit" value="Delivered" id="submit">
                    </form>

                </td>
                </tr>
                <?php } ?>
            </table>
          
            <?php
        
    }else{
        echo "<h2>No Records found<h2>";
    }
}else{
    echo $conn->error;
}
?>

</div>

      
    
        
        
        
        
            
           
            











       
           
        
  