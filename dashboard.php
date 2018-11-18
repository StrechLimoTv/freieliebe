<?php
/*
Author: Justin Dreisow aka Aeon Eros
Creation Date: 17. Februar 2018
Website: freieliebe.one
*/
 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
    <link rel="icon" type="img/ico" href="img/favicon.ico">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Dashboard</p>
<p>Eine andere sichere Seite.</p>
<p><a href="index.php">Home</a></p>
<a href="logout.php">Ausloggen</a>


</div>
</body>
</html>
