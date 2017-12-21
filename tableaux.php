<?php session_start(); // démarre la session
require_once("function.php");
$bdd = bdd(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrelloLike - Tableaux</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="banner">
        <span class="titrelogo">
            <a href="#">
                TrelloLike
            </a>
        </span>
        <span class="menu">
            <a href="#">
                <div class="bouton">
                    +
                </div>
            </a>
            <a href="#">
                <div class="bouton">
                    !
                </div>
            </a>
            <a href="#">
                <div class="bouton">
                    &#128591;
                </div>
            </a>
               <a href="control_connexion.php?deco=deco">
                <div class="boutontext">
                    Deconnexion
                </div>
            </a>
        </span>
    </div>
    <div class="container">
        <div class="partie">
            <a href="#">
                <div class="boutonpoussoir">
                    Créer un tableau
                </div>
            </a>
        </div>
        <div class="partie">
            <h1>
                &#128591; Tableaux Personnels
            </h1>
            <div class="containertableau">
                <div class="tableau">
                    Tableau 1
                </div>
                <div class="tableau">
                    Tableau 2
                </div>
                <div class="tableau">
                    Tableau 3
                </div>
                <div class="tableau">
                    Tableau 4
                </div>
            </div>
        </div>
    </div>
</body>
</html>