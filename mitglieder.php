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
      <link rel="icon" type="img/ico" href="img/favicon.ico">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jqc-1.12.3/moment-2.18.1/dt-1.10.16/b-1.5.1/sl-1.2.5/datatables.min.css">
        <link rel="stylesheet" type="text/css" href="css/generator-base.css">
        <link rel="stylesheet" type="text/css" href="css/editor.dataTables.min.css">

        <script type="text/javascript" charset="utf-8" src="https://cdn.datatables.net/v/dt/jqc-1.12.3/moment-2.18.1/dt-1.10.16/b-1.5.1/sl-1.2.5/datatables.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/dataTables.editor.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/table.users.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
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
            <li><a href="index.php">Home</a></li>
            <li><a href="regeln.php">Regeln </a></li>
            <li><a href="dashboard.php">News</a></li>
            <li class="active"><a href="mitglieder.php">Mitglieder</a></li>
            <li><a href="dashboard.php">Gangkonto</a></li>
            <li><a href="dashboard.php">Verbündeten/Feindliste</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Ausloggen</a></li>
          </ul>
        </div>
      </div>
    </nav>

        <!-- MITGLIEDER PAGE CONTENT -->
	<body class="dataTables">
		<div class="container">

			<h1 class="title">
				Aktuelle User
			</h1>
			
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="users" width="100%">
				<thead>
					<tr>
						<th>Username</th>
						<th>Steamid64</th>
						<th>AUID</th>
						<th>Geburtsdatum</th>
						<th>Aktuelles Alter</th>
						<th>E-mail</th>
						<th>Reg_IP</th>
						<th>Reg_Date</th>
						<th>Passwort Hash</th>
					</tr>
				</thead>
			</table>

		</div>
	</body>



        
    <div class="footer navbar-fixed-bottom">
        <div class="container">
            <p class="text-left pull-left" ><a class="EinloggenText2" href="ts3server://79.133.51.98/?nickname=Dashboard Gast" target="_blank">Verbinde mit Teamspeak</a></p>
            <p class="text-right pull-right"><a class="EinloggenText2" target="_blank">Created by Aeon Eros</a></p>
        </div>
    </div>
        
    </body>
</html>
