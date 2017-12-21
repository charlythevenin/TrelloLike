<?php session_start(); // démarre la session
require_once("function.php");
$bdd = bdd(); ?>

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
        <span class="menu">
        </span>
    </div>
	<section>
		<article>
			<div class="title">Se connecter à Trello</div><br>
			<div class="container2">
			<form method="post" action="control_connexion.php">
				<label>Login</label><br>
				<div class="form"><input class="champ" id="pseudo" type="text" name="pseudo" placeholder="ex: pseudo"></div><br><br>

				<label>Password</label><br>
				<div class="form"><input class="champ" id="password" type="password" name="password" placeholder="entrer votre mot de passe"></div><br>
				
				<label class="label"  for="souvenir">Se souvenir de moi</label>
                <input  id="souvenir" type="checkbox" name="souvenir">

				<input id="submit" type="submit" />
			</form>
			</div>
		</article>
	</section>
	<div class="bloc">Vous n'êtes pas inscrits ? S'inscrire</div>

</body>
</html>