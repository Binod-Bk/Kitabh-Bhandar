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
         .menu{
            display:inline-block;
            padding: 12px 0px;
            
        }
         ul li{
            display: inline-block;
            list-style: none;
            padding:5px 15px;
            border: 1px solid black;
            border-radius:7px;
        }
         ul li a{
            text-decoration: none;
            color:white;
        }

         ul li:hover{
            background:black;
        }

            .dropdown{
                top:6px;
            }
         ul li:hover .dropdown {
            display:block;
            position:relative;
            margin-top:5px;
            z-index: 1;
            background:black;
        }

        ul li:hover .dropdown ul {
            display:block;
            position:absolute;
            margin:10px
            z-index: 1;
            background:#2F4F4F;
        }

        .dropdown ul{
            display:none;
        }
        .dropdown ul li{
            border:none;
            display:block;
        }
        
      
    </style>
</head>
<body>
    <header>
        
            
                <img src="../Images/lightlogo.png" alt="">
                
                <div class="menu">
            <ul>
                <li><a href="home.php">Home</a></li>
               <li> <a href="gallery.php">Book Gallery </a>
               <div class="dropdown">
                    <ul>
                        <li><a href="">Romance</a> </li>
                        <li><a href="">Fantasy</a></li>
                        <li><a href="">Mysteries</a></li>
                        <li><a href="">Fiction</a></li>
                        <li><a href="">Thriller</a></li>
                    </ul>  
                    </div>          
            </li>
                <li> <a href="sellbook.php">Sell Books</a></li>
                <li><a href="myrent.php">Rent Books</a></li>
                <li><a href="history.php">My History</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="profile.php">My Profile</a></li>
                <!-- <li>
                    <img src="../Images/user.png" alt="">
                </li> -->
            </ul>
            </div>
    </header>

    
