<?php session_start(); // démarre la session
require_once("modele_connexion.php");
$bdd = bdd(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style_connexion.css"/>
</head>
<body>
<div id="form">

<div id="titre">Formulaire de connexion</div>

<form method="post" action="control_connexion.php" style="padding:5%">

<label class="label" for="pseudo">Pseudo</label></br>
<input class="champ" id="pseudo" type="text" name="pseudo"></br>


<label class="label" for="password">Mot de passe</label></br>
<input class="champ" id="password" type="password" name="password"></br>

<label class="label"  for="souvenir">Se souvenir de moi</label>
<input  id="souvenir" type="checkbox" name="souvenir"></br>

<input id="submit" type="submit" />

</form>


</div>
</body>
</html>