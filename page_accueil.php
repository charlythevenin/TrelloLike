<?php
if (isset($_POST['login']) && isset($_POST['mdp'])) {
if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['mdp']) && !empty($_POST['mdp']))) {
try {
$pdo = new PDO('mysql:host=localhost;dbname=TrelloLike','trello','trello');
    $reponse = $pdo->query("SELECT * FROM `utilisateurs`");
    $data = $reponse->fetchAll(PDO::FETCH_CLASS, "utilisateurs")[0];
} catch (PDOException $e) {
    http_response_code(500);
    die();
}
}
}
    
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
        <span class="menu">
        </span>
    </div>
	<section>
		<article>
			<div class="title">Se connecter à Trello</div><br>
			<div class="container2">
			<form action="tableaux.html">
				<label>Email</label><br>
				<div class="form"><input type="text" name="login" placeholder="ex: nom@gmail.com"></div><br><br>

				<label>Password</label><br>
				<div class="form"><input type="Password" name="mdp" placeholder="entrer votre mot de passe"></div><br>

				<button type="submit">Se connecter</button>
			</form>
			</div>
		</article>
	</section>
	<div class="bloc"><a href="Inscription.php">Vous n'êtes pas inscrits ? S'inscrire</a></div>

</body>
</html>