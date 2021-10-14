<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        header{
            background:#2F4F4F;
            color:white;
            padding: 0px 22px;
            display:flex;
            justify-content:space-between;
            height:50px;
            
        }
        
        
        header img{
            width:99px;
            height:60px;
            
            
        }
        header .menu{
            display:inline-block;
            padding: 12px 0px;
            
        }
        header ul li{
            display: inline-block;
            list-style: none;
            padding:5px 15px;
            border: 1px solid black;
        }
        header ul li a{
            text-decoration: none;
            color:white;
        }

        header ul li:hover{
            background:black;
        }
       
    </style>
</head>
<body>
    <header>
        
            
                <img src="../Images/lightlogo.png" alt="">
                
                <div class="menu">
            <ul>
                <li><a href="home.php">Home</a></li>
               <li> <a href="addbook.php">Book Gallery</a></li>
                <li> <a href="addbook.php">Add Books</a></li>
                <li><a href="addbook.php">Rented Books</a></li>
                <li><a href="addbook.php">Ordered Books</a></li>
                <!-- <li>
                    <img src="../Images/user.png" alt="">
                </li> -->
            </ul>
            </div>
    </header>

    
