<?php
include('header.php');

?>

<style>
    body{
        background:#B0E0E6;
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

</style>

    <form action="../process/addbook.php" method="POST">
            
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <br>
            <h2>Add New Book</h2><br><br>
            <label for="name">Name</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="bname" placeholder="Enter Book Name">
            <br><br>
            <label for="author">Author</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="author" placeholder="Enter Author Name">
            <br><br>
            <label for="isbn_no">ISBN No.</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="number"  name="isbn" placeholder="Enter Book ISBN No.">
            <br><br>
            <label for="publication">Publication</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="publication" placeholder="Enter Publication Name">
            <br><br>
            <label for="edition">Edition</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="edition" placeholder="Enter Book's Edition">
            <br><br>
            <label for="release_date">Release Date</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="date" name="release" placeholder="Enter Book's Release Date">
            <br><br>
            <label for="category">Category</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="category" id="">
                <option value="Romance">Romance</option>
                <option value="Fantasy">Fantasy</option>
                <option value="Thriller">Thriller</option>
                <option value="Mysteries">Mysteries</option>
                <option value="Fiction">Fiction</option>
            </select>
            <br><br>
            <label for="image">Image</label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="file" name="image" placeholder="Book Image">
            <br><br>&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit" class="but" >
                <span></span>
                <span></span>
                <span></span>
                <span></span>
        Add Book</button> &nbsp;&nbsp;
            <button type="reset" class="but">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Reset</button><br><br>


        </form>

