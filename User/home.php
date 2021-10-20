
<?php
include("./header.php");
?>
<style>
body{
    padding: 0;
    margin:0;
    overflow: hidden;
    font-family:monospace;
}
.slider{
   

}
.banner1, .banner2, .banner3, .banner4{
    height:100vh;
    width:100%;
    position:absolute;
    left:0;
    top: 50px;;
}
/* .shadow{
    width: 150%;
    height:100%;
    position:absolute;
    background-color: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5));
    z-index: 1;
} */
.banner1{
    animation:slide1 12s linear infinite;
}
@keyframes slide1 {
    0%{
        visibility: visible;
    }
    25%{
        visibility: hidden;
    }
    50%{
        visibility: hidden;
    }
    75%{
        visibility: hidden;
    }
    100%{
        visibility: visible;
    }
}
@keyframes slide2 {
    0%{
        visibility: hidden;
    }
    25%{
        visibility: hidden;
    }
    50%{
        visibility: visible;
    }
    75%{
        visibility: hidden;
    }
    100%{
        visibility: hidden;
    }
}

@keyframes slide3 {
    0%{
        visibility: hidden;
    }
    25%{
        visibility: hidden;
    }
    50%{
        visibility: hidden;
    }
    75%{
        visibility: visible;
    }
    100%{
        visibility: hidden;
    }
}
@keyframes slide4{
    0%{
        visibility: hidden;
    }
    25%{
        visibility: hidden;
    }
    50%{
        visibility: hidden;
    }
    75%{
        visibility: hidden;
    }
    100%{
        visibility: visible;
    }
}
.banner2{
    animation:slide2 12s linear infinite;
}
.banner3{
    animation:slide3 12s linear infinite;
}
.banner4{
    animation:slide4 12s linear infinite;
}

.banner1 img, .banner2 img, .banner3 img, .banner4 img{
    width:120%;
    height: 100vh;
    position:absolute;
    left:50%;
    top: 50%;
    transform:translate(-50%,-50%);
    animation: zoom 3s linear infinite;

}
@keyframes zoom{
    100%{
        width:100%;
    }
}
.overlay{
    width:100%;
    position:absolute;
    height:100vh;
    color:white;
    background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
}
/* .text-box{
    width:100%px;
    position:absolute;
    top:200px;
    left: 100px;
    color:white;
   background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
} */
.overlay h1{
    margin-top: 100px;
    
}
.overlay p{
    position:relative;
    font-size: 18px;
    line-height: 22px;
    top:40px;
}
.overlay span{
    background-color: red;
    height: 2px;
    width: 20%;
    position:absolute;
    left: 0;
}


</style>

<body>
    <div class="shadow">

    </div>
    
    <div class="banner1">
        <img src="../Images/book_cover/the_alchemist.jpg" alt="">
        <div class="overlay">
        <h1>Welcome To Our Website.</h1><br>
        <span></span>
        <p>Grow your knowlege. <br>
        Search the book of your interest and get the knowlege beyond text books.<br>
        Also help us grow by providing us with your old used books.
        </p>
        </div>
    </div>

     <div class="banner2">
        <img src="../Images/book_cover/bird.jpg" alt="">
        <div class="overlay">
        <h1>Welcome To Our Website.</h1><br>
        <span></span>
        <p>Grow your knowlege. <br>
        Search the book of your interest and get the knowlege beyond text books. <br>
        Also help us grow by providing us with your old used books.

        </p>
    </div>
    </div>

    <div class="banner3">
        <img src="../Images/book_cover/palpasa.jpg" alt="">
        <div class="overlay">
        <h1>Welcome To Our Website.</h1><br>
        <span></span>
        <p>Grow your knowlege. <br>
        Search the book of your interest and get the knowlege beyond text books.<br>
        Also help us grow by providing us with your old used books.
        </p>
    </div>
    </div>

    <div class="banner4">
       <img src="../Images/book_cover/stars.jpg" alt="">
       <div class="overlay">
       <h1>Welcome To Our Website.</h1><br>
        <span></span>
        <p>Grow your knowlege. <br>
        Search the book of your interest and get the knowlege beyond text books.<br>
        Also help us grow by providing us with your old used books.
        </p>
    </div>
    </div>

</body>
</html>