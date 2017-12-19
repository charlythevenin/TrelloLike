<?php
$db = mysql_connect('localhost', 'login', 'password'); 
mysql_select_db('nomdelabase',$db);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Appli Web</title>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
<div class="banner">
        <span class="titrelogo">
            <a href="#">
                TrelloLike
            </a>
        </span>
        <span class="menu"><a href="#">Se connecter</a>
        </span>
    </div>
    
    <section>
        <article>
            <div class="title">S'inscrire à Trello</div><br>
            <div class="container2">
            <form action="#">
                <label>Nom</label><br>
                <div class="form"><input type="text" placeholder="ex: nom"  name="login"></div><br><br>
                <label>Email</label><br>
                <div class="form"><input type="text" placeholder="ex: nom@gmail.com" name="email"></div><br><br>
                <label>Password</label><br>
                <div class="form"><input type="Password" placeholder="entrer votre mot de passe" name="password"></div><br>
                <button>S'inscrire !</button>
            </form>
            </div>
        </article>
    </section>
    <div class="bloc"><a href="page_accueil.php">Vous avez déjà un compte ? Connectez-vous.</a></div>
    
</body>
</html>
