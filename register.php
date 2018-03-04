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
        <title>Dashboard Registrieren</title>
        <link rel="icon" type="img/ico" href="img/favicon.ico">
        <link rel="stylesheet" href="css/style.css" />
        </head>
    
    <body>
        <?php
            require('db.php');
            // If form submitted, insert values into the database.
            if (isset($_REQUEST['username'])){
                $username = stripslashes($_REQUEST['username']); // removes backslashes
                $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
                $email = stripslashes($_REQUEST['email']);
                $email = mysqli_real_escape_string($con,$email);
                $password = stripslashes($_REQUEST['password']);
                $password = mysqli_real_escape_string($con,$password);
                $password_asci = stripslashes($_REQUEST['password']);
                $password_asci = mysqli_real_escape_string($con,$password);
                $steamid64 = stripslashes($_REQUEST['steamid64']);
                $steamid64 = mysqli_real_escape_string($con,$steamid64);
                $auid = stripslashes($_REQUEST['auid']);
                $auid = mysqli_real_escape_string($con,$auid);
                $reg_date = date("Y-m-d H:i:s");
                $register_ip = @$_SERVER['REMOTE_ADDR'];
                $gebdat = date('Y-m-d', strtotime(str_replace('-', '/', $_REQUEST['gebdat'])));
                
                list($jahr, $monat, $tag) = explode("-", $gebdat);
                $alt_aktl  = date("Y") - $jahr;
                $monat_diff = date("m") - $monat;
                $tag_diff   = date("d") - $tag;
                if( ($monat_diff<0) || ($monat_diff==0 && $tag_diff<0) ) {
                $alt_aktl--; }
                
                
                $query = "INSERT into `users` (username, password, password_asci, email, reg_date, register_ip, steamid64, auid, gebdat, alt_aktl) VALUES ('$username', '".md5($password)."', '$password', '$email', '$reg_date', '$register_ip', '$steamid64','$auid', '$gebdat', '$alt_aktl')";
                $result = mysqli_query($con,$query);
                if($result){
                    echo "<div class='form'><h3>Du hast dich erfolgreich Regestriert.</h3><br/><h1> Klicke hier um dich </h1><a href='login.php'>Einzuloggen</a></div>";
                }
                
                 $query = "SELECT id from `users` WHERE email = '$email' LIMIT 1";
                $result = mysqli_query($con,$query);
                
                $out = mysql_fetch_assoc($result);
                $userid = $out['id'];
                
                 $query = "INSERT into `userstogroup` (userid, groupid) VALUES ('$userid', '2')";
                $result = mysqli_query($con,$query);

                
            }else{
        ?>
        <div class="form">
        <img src="img/Freieliebe%201920x300.png">
        <br><br>
        <form class="EinloggenText" name="registration" action="" method="post">
        <input type="text" name="username" placeholder="Username (Gleich wie Ingame)" required />
        <input type="text" name="steamid64" placeholder="Steam ID 64" required />            
        <input type="text" name="auid" placeholder="Zero One UID" required />           
        <!-- <input type="text" name="armah" placeholder="Arma Erfahrung (in H)" required /> -->
        <input type="email" name="email" placeholder="E-mail" required />
        <input type="password" name="password" placeholder="Passwort" required />
        <h5 class="EinloggenText">Geburtsdatum</h5>
        <input type="date" name="gebdat" value="2001-01-02" max="2002-01-02" required />
        <br><br>
        <hr class="style1">
        <input type="submit" name="submit" value="Registrieren" /> 
        </form>
        



        </div>
        <?php } ?>
    </body>
</html>
