<?php
    include "loginphp.php";
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel = "stylesheet" type = "text/css" href = "../css/form.css">
        <link rel = "stylesheet" type = "text/css" href = "../css/common.css">
    </head>
    <body style="background-image: url('../image/download.jfif')">
        <div class = "site-menu">
            <ul>
                <li><?php echo "<a href = '../html/home.php'>Home</a>"?></li>
                <li><?php echo "<a href = '../html/contact.php'>Contact</a>"?></li>
                <li><?php echo "<a href = 'login.php'>Login</a>"?></li>
                <li><?php echo "<a href = 'register.php'>Register</a>"?></li> 
            </ul>
        </div>

        <div class = "site-header">
            <h2>Login</h2>
        </div>
        <form action="login.php" method = "post">
            <div class = "input-group">
                <label>Username</label>
                <input type="text" name = "username"/>
            </div>
            
            <div class = "input-group">
                <label>Password</label>
                <input type="password" name = "password"/>
            </div>
            
            <div class = "input-group">
                <button type="submit" name = "login" class = "btn">Login</button>
            </div>
            
            <p>
                Don't have an account?<a href = "register.php">Sign Up</a>  
            </p>

        </form>
    </body>
</html>