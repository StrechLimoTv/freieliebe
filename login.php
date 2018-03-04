<?php
/*
Author: Justin Dreisow aka Aeon Eros
Creation Date: 17. Februar 2018
Website: freieliebe.one
*/
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Dashboard Login</title>
    <link rel="icon" type="img/ico" href="img/favicon.ico">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/vendor.c39b0dcb.css" />
    </head>
    
    <body>   
    <?php
        require('db.php');
        session_start();
        // If form submitted, insert values into the database.
        if (isset($_POST['username'])){

            $username = stripslashes($_REQUEST['username']); // removes backslashes
            $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);

        //Checking is user existing in the database or not
            $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if($rows==1){
                $_SESSION['username'] = $username;
                $_SESSION['welcomemsg'] = false;
                header("Location: index.php"); // Redirect user to index.php
                }else{
                    echo "<div class='form'><h3>Username/Passwort ist nicht korrekt. Melde dich bei einem deiner Chefs.</h3><br/>Klick hier um dich <a href='login.php'>Einzuloggen</a></div>";
                    }
        }else{
    ?>
    <div class="form">
        <img src="img/Freieliebe%201920x300.png">
        <br><br>
        <form class="EinloggenText" action="" method="post" name="login">
            <input type="text" name="username" placeholder="Username" required />
            <input type="password" name="password" placeholder="Passwort" required />
            <br><br>
            <hr class="style1">
            <input name="submit" type="submit" value="Login" />
        </form>
    </div>
        
    <?php } ?>
        
<div class="footer navbar-fixed-bottom">
        <div class="container">
            <p class="text-left pull-left" ><a class="EinloggenText2" href="http://www.zero-one.cc" target="_blank">Graphics and Logos by Zero-One Gaming Community</a></p>
            <p class="text-right pull-right"><a class="EinloggenText2" target="_blank">Created by Aeon Eros</a></p>
        </div>
    </div>
        
    </body>
</html>
