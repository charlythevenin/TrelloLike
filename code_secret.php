<?php session_start(); // démarre la session
require_once("modele_connexion.php");
$bdd = bdd(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
<a href="control_connexion.php?deco=deco"><button>Deconnexion</button></a>

    
</body>
</html>