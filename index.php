<?php
/*
Author: Justin Dreisow aka Aeon Eros
Creation Date: 17. Februar 2018
Website: freieliebe.one
*/

include("auth.php"); //include auth.php file on all secure pages 
?>


<!DOCTYPE html>
<html lang="de">
    
    <head>
      <title>Freie Liebe Dashboard</title>
        
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        
      <link rel="icon" type="img/ico" href="img/favicon.ico">
      <link rel="stylesheet" href="css/main.css" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="js/modernizr.custom.80028.js"></script>
    </head>
    
    <body>
        
        <!-- Push-MSG Content -->
        <?php if(!$_SESSION['welcomemsg']): ?>
        <div id="note">
             <h1 class="welcome">Wilkommen zurück <?php echo $_SESSION['username']; ?>!</h1>
        </div>
        <?php endif; ?>
        
        
         <!-- Navbar Content -->
        
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <img class="navbar-brand" src="img/favicon.ico" href="index.php">
        </div>
          
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="regeln.php">Regeln </a></li>
            <li><a href="dashboard.php">News</a></li>
            <li><a href="mitglieder.php">Mitglieder</a></li>
            <li><a href="dashboard.php">Gangkonto</a></li>
            <li><a href="dashboard.php">Verbündeten/Feindliste</a></li>
          </ul>
            
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Ausloggen</a></li>
            
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Profil <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Mein Profil</a></li>
                  <li><a href="#">Einstellungen</a></li>
                </ul>
            </li>
          </ul>
            
            
            
        </div>
      </div>
    </nav>

        
        <!-- Main Content -->
        
        
    <div class="container-fluid text-center">    
      <div class="row content">
        <div class="col-sm-2 sidenav">
          <p><a href="#">Link</a></p>
          <p><a href="#">Link</a></p>
          <p><a href="#">Link</a></p>
        </div>
        <div class="col-sm-8 text-left"> 
           <h1 class="title">Wilkommen <?php echo $_SESSION['username']; ?>!</h1>
            
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <hr class="style1">
          <h3>Test</h3>
          <p>Lorem ipsum...</p>
        </div>
        <div class="col-sm-2 sidenav">
          <div class="well">
            <h1>ADS</h1>
          </div>
          <div class="well">
            <h1>ADS</h1>
          </div>
        </div>
      </div>
    </div>

    <footer class="container-fluid text-center">
      <p>Footer Text</p>
    </footer>
    
        <div class="footer navbar-fixed-bottom">
        <div class="container">
            <p class="text-left pull-left" ><a class="EinloggenText2" href="ts3server://79.133.51.98/?nickname=Dashboard Gast" target="_blank">Verbinde mit Teamspeak</a></p>
            <p class="text-right pull-right"><a class="EinloggenText2" target="_blank">Created by Aeon Eros</a></p>
        </div>
    </div>

    </body>
</html>
<?php $_SESSION['welcomemsg'] = true; ?>
