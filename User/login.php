<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/ulogin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
            *{
                
                
                
            }
        
        .errormsg{
            background:red;
            color:white;
            position:relative;
            width:400px;
            height:30px;
            left:200px;
            text-align:center; 
        }
        .div_log1{
            margin-top:8px;
        }
        .div_log2{
            margin-top:8px;
        }
        .successmsg{
            background:green;
            color:white;
            position:relative;
            width:400px;
            height:30px;
            left:200px;
            text-align:center; 
        }
    </style>
</head>
<body >
    <h1 class="title">Kitabh Bhandar</h1>
    <?php if(isset($_GET['msg'])){ ?>
    <div class=errormsg>
        <?php echo $_GET['msg']; ?>
    </div>
   <?php } ?>
   <?php if(isset($_GET['sms'])){ ?>
    <div class=successmsg>
        <?php echo $_GET['sms']; ?>
    </div>
   <?php } ?>
        
    <div class="div_log1">
        
        <fieldset class="field_set">
            <legend class="leg"> Log In Here</legend>
        <form class="form" action="../process/loginprocess.php" method="POST">

           <label> Email:</label> <input type="text" name="email" placeholder="Enter Your Username "> <br><br>
           <label>Password:</label>  </label> <input type="password" name="pass" placeholder="Enter Your Password"><br><br>
            <!-- Select User Type: &nbsp;&nbsp;<select name="usertype" class="but2">
                <option value="admin" >Amin</option>
                <option value="user" >User</option>
            </select> <br><br><br> -->
            <input type="hidden" name="usertype" value="student">
            <button type="submit" class="but">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                
                Log In</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="reset" class="but">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Reset</button>
            <br><br>
            Forgot Your Precious Password ? <a href="forgot.html" class="atag">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Click Me</a>
            <br><br>
            If You Are A New User <br><a href="signup.html" class="atag"> 
                
                Sign Up 
                <span></span>
                <span></span>
                <span></span>
                <span></span>
               </a> 
                    <br>
            </fieldset>
    </div>
</div>
        <div class="row">
    <div class="div_log2">
        <fieldset class="field_set">
            <legend class="leg"> Quotes</legend>
        “I find television very educating. Every time somebody turns on the set, I go into the other room and read a book.” 
       <p class="creator"> — Groucho Marx </p>
“Books and doors are the same thing. You open them, and you go through into another world.”<br>
    <p class="creator"> — Jeanette Winterson </p>
    “A reader lives a thousand lives before he dies . . . The man who never reads lives only one.” <br>
    <p class="creator"> — George R.R. Martin 
    </p>
“There is more treasure in books than in all the pirate’s loot on Treasure Island.” <br>
<p class="creator"> – Walt Disney</p>
</fieldset>
    </div>
    </div>
    
</body>
</html>