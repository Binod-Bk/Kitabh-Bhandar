
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

.pp{
    width:15%;
    left:43%;
    height:35vh;
    border-radius:80px;
    z-index: 1;
    position:absolute;
}

.myimg{
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
    color:white;absolute
   background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));
} */
.overlay h1{
    margin-top: 15px;
    text-align:center;
    font-size:40px;
    
}
.overlay pre{
    position:relative;
    font-size: 20px;
    line-height: 22px;
    top:220px;
    left: 580px;
    color:Green;
    width:280px;
}
.overlay span{
    background-color: red;
    height: 2px;
    width: 20%;
    position:absolute;
    left: 550px;
}

.social-links{
    display:inline-block;
    position:relative;
    top:220px;
    left:40%;
    border:2px solid yellow;
}
.social-links img{
   width:40px;
   height:40px;
   padding:10px;

}
h3{
    font-size:20px;
    text-align:center;
    color:yellow;
}


</style>

<body>
    <div class="shadow">

    </div>
    
    <div class="banner1">
        <img src="../Images/book_cover/castle.png" class="myimg" alt="">
        <div class="overlay">
        <h1>About Us </h1><br>
        <span></span><br><br>
        <img src="../Images/binod.png" class="pp" alt="">
        <pre>    { Binod B.K. } <br>
{ Founder | Developer }
        </pre>
        <div class="social-links">
            <h3>Connect With Me</h3>
               <a href="https://www.facebook.com/binod.rockson2056"><img src="../Images/facebook.png" alt=""></a>
                <a href="https://www.instagram.com/binod_bk_/"><img src="../Images/instagram.png" alt=""></a>
                <a href="https://twitter.com/Bnod_Bk"><img src="../Images/twitter.png" alt=""></a>
                <a href="https://www.linkedin.com/in/binod-b-k-60317719a/"><img src="../Images/linkedin.png" alt=""></a>
                <a href="https://github.com/Binod-Bk"><img src="../Images/github.png" alt=""></a>
            </div>
        </div>
    </div>

     <div class="banner2">
        <img src="../Images/book_cover/castle.png"  class="myimg" alt="">
        <div class="overlay">
        <h1>About Us</h1><br>
        <span></span><br><br>
        <img src="../Images/binod.png"  class="pp" alt="">
        <pre>    { Binod B.K. } <br>
{ Founder | Developer }
        </pre>
        <div class="social-links">
        <h3>Connect With Me</h3>
               <a href="https://www.facebook.com/binod.rockson2056"><img src="../Images/facebook.png" alt=""></a>
                <a href="https://www.instagram.com/binod_bk_/"><img src="../Images/instagram.png" alt=""></a>
                <a href="https://twitter.com/Bnod_Bk"><img src="../Images/twitter.png" alt=""></a>
                <a href="https://www.linkedin.com/in/binod-b-k-60317719a/"><img src="../Images/linkedin.png" alt=""></a>
                <a href="https://github.com/Binod-Bk"><img src="../Images/github.png" alt=""></a>
            </div>
    </div>
    </div>

    <div class="banner3">
        <img src="../Images/book_cover/castle.png" class="myimg" alt="">
        <div class="overlay">
        <h1>About Us</h1><br>
        <span></span><br><br>
        <img src="../Images/binod.png"  class="pp" alt="">
        <pre>    { Binod B.K. } <br>
{ Founder | Developer }
        </pre>
        <div class="social-links">
        <h3>Connect With Me</h3>
               <a href="https://www.facebook.com/binod.rockson2056"><img src="../Images/facebook.png" alt=""></a>
                <a href="https://www.instagram.com/binod_bk_/"><img src="../Images/instagram.png" alt=""></a>
                <a href="https://twitter.com/Bnod_Bk"><img src="../Images/twitter.png" alt=""></a>
                <a href="https://www.linkedin.com/in/binod-b-k-60317719a/"><img src="../Images/linkedin.png" alt=""></a>
                <a href="https://github.com/Binod-Bk"><img src="../Images/github.png" alt=""></a>
            </div>
    </div>
    </div>

    <div class="banner4">
       <img src="../Images/book_cover/castle.png" class="myimg" alt="">
       <div class="overlay">
       <h1>About Us</h1><br>
        <span></span><br><br>
        <img src="../Images/binod.png"  class="pp" alt="">
        <pre>    { Binod B.K. } <br>
{ Founder | Developer }
        </pre>
        <div class="social-links">
        <h3>Connect With Me</h3>
               <a href="https://www.facebook.com/binod.rockson2056"><img src="../Images/facebook.png" alt=""></a>
                <a href="https://www.instagram.com/binod_bk_/"><img src="../Images/instagram.png" alt=""></a>
                <a href="https://twitter.com/Bnod_Bk"><img src="../Images/twitter.png" alt=""></a>
                <a href="https://www.linkedin.com/in/binod-b-k-60317719a/"><img src="../Images/linkedin.png" alt=""></a>
                <a href="https://github.com/Binod-Bk"><img src="../Images/github.png" alt=""></a>
            </div>
    </div>
    </div>

</body>
</html>