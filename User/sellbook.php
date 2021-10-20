<?php
include('header.php');

?>

<style>
    body{
        background:#B0E0E6;
        font-family:monospace;
    }
form{
    margin-top: 20px;
    margin-left: 400px;
    display: inline-block;
    position: relative;
    overflow: hidden;
    transition: 0.2s;
    color:#2196f3;
    background:#B0E0E6;
}

form:hover{
    background-color: #5bbb78;
    color:white;
    box-shadow: 0 0 10px #2196f3, 0 0 10px #2196f3, 0 0 10px #2196f3;
    transition-delay:1s;
}

form span{
    position:absolute;
    display: block;
}

form span:nth-child(1){
    top:0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#2196f3);

}

form:hover span:nth-child(1){
    left:100%;
    transition: 1s;
}

form span:nth-child(3){
    bottom:0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#2196f3)

}

form:hover span:nth-child(3){
    right:100%;
    transition: 1s;
    transition-delay: 0.5;
}

form span:nth-child(2){
    top:-100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#2196f3)

}

form:hover span:nth-child(2){
    top:100%;
    transition: 1s;
    transition-delay: 0.25;
}

form span:nth-child(4){
    bottom:-100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#2196f3)

}

form:hover span:nth-child(4){
    bottom:100%;
    transition: 1s;
    transition-delay: 0.25;
}

form label{
    text-align: right;
    width: 120px;
    display: inline-block;

}

.but{
    position: relative;
    display:inline-block;
    padding: 5px 15px;
    color:#2196f3;
    text-transform: uppercase;
    letter-spacing: 4px;
    text-decoration: none;
    font-size: 17px;
    overflow: hidden;
    transition: 0.2s;
    border:0px;
    background-color: transparent;
}

.but:hover{
    color: #255784;
    background-color: white;
    box-shadow: 0 0 10px #2196f3, 0 0 10px #2196f3, 0 0 10px #2196f3;
    transition-delay:1s;
}

.but span{
    position:absolute;
    display: block;
}

.but span:nth-child(1){
    top:0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg,transparent,#2196f3)

}

.but:hover span:nth-child(1){
    left:100%;
    transition: 1s;
}

.but span:nth-child(3){
    bottom:0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg,transparent,#2196f3)

}

.but:hover span:nth-child(3){
    right:100%;
    transition: 1s;
    transition-delay: 0.5;
}

.but span:nth-child(2){
    top:-100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg,transparent,#2196f3)

}

.but:hover span:nth-child(2){
    top:100%;
    transition: 1s;
    transition-delay: 0.25;
}

.but span:nth-child(4){
    bottom:-100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg,transparent,#2196f3)

}

.but:hover span:nth-child(4){
    bottom:100%;
    transition: 1s;
    transition-delay: 0.25;
}
#myterm{
    border:none;
    background:transparent;
    color:#2196f3;
}

</style>

    <form action="../process/usersell.php" method="POST">
            
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <br>
            <h2>Sell Book</h2><br><br>
            <label for="name">Name</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="bname" placeholder="Enter Book Name">
            <br><br>
            <label for="author">Author</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="author" placeholder="Enter Author Name">
            <br><br>
            <label for="isbn_no">ISBN No.</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="number"  name="isbn" placeholder="Enter Book ISBN No.">
            <br><br>
            <label for="edition">Edition</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="edition" placeholder="Enter Book's Edition">
            <br><br>
            <label for="image">Image</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="file" name="image" placeholder="Book Image">
            <br><br>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" required="required">
            I agree to all  <button onclick="myFunction()" id="myterm">terms and conditions.</button>&nbsp;&nbsp;&nbsp;&nbsp;
            <br><br>
           <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="but" >
                <span></span>
                <span></span>
                <span></span>
                <span></span>
        Add Book</button> &nbsp;&nbsp;


        </form>
        <script>
      function myFunction() {
        alert(" The objectives of my website is:\nWe will buy old non-academic books from the user of my website. If they have\none old book the starting price will be Rs.150 and the more they have I \nincrease the amount by Rs.30. Eg: if they want to sell two books they will\ntake 150+180 and if three books 150+180+210. They can bring as much book as\nthey want.(They must make sure no page is missing otherwise we have to \nhandle the matter after looking the book).\n\n2. People can rent the books to read that they want from the website. The \navailable books will be in the website and they can rent the books.The price\nof the book rented is rs.100 for each but they have to give rs.300 for each \nbook they take.\nAfter reading the book and returning the book they will get their rs.200\nback.(Also the books will be checked for the damage, if damage is found they\nwill be fined.)\n\n3. The time to read the book will be 20 days for each book. If they take 3 \nbooks then they will have to return at least 1 book after 20 days and \nanother after 20 days and another after 20 days. ");
      }
    </script>

