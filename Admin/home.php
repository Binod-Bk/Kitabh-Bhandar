
<?php

include('header.php');

?>

    <style>
         .container1{
            display:flex;
            background:#ADD8E6;
            height:80vh;
            
        }
        .container1 .slider{
            width:750px;
            height:65vh;
            background:yellow;
            position:relative;
            top:20px;
            left:70px;
        }
        .container1 .description{
            width:400px;
            height:65vh;
            background:#FFA07A;
            position:relative;
            top:20px;
            left:170px;
            
        }
        .container1 .slider .a{
            width:40%;
            height:60vh;
            position:absolute;
            left:6%;
            top:5%;
        }
        .container1 .slider .b{
            width:40%;
            height:60vh;
            position:absolute;
            left:55%;
            top:5%;
        }
    </style>

<div class="container1">
        <div class="slider">
            <img src="../Images/book_cover/alchemist.jpg" class="a"alt="">
            <img src="../Images/book_cover/alchemist_back.jpg" class="b" alt="">
        </div>
        <div class="description">
            <p>Alchemist is a boook written by Paulo Coelho.
                It teaches us about following your dream.
            </p>
        </div>
    </div>
    <div class="container2">
        <div class="slider">
            <img src="../Images/book_cover/the_monk.jpg" class="a"alt="">
            <img src="../Images/book_cover/alchemist_back.jpg" class="b" alt="">
        </div>
        <div class="description">
            <p>Alchemist is a boook written by Paulo Coelho.
                It teaches us about following your dream.
            </p>
        </div>
    </div>

    </body>
    </html>