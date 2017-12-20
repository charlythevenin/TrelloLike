<?php
//Connexion à la BDD
  try
  {
  
   $bdd = new PDO ('mysql:host=localhost;dbname=TrelloLike', 'trello', 'trello');
  
  }
  
  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }









if(ISSET($_POST['submit']))
{


//On créer les variables
$login =   $_POST['login'];
$password = $_POST['password'];
$password = hash("sha256", $password);




$req = $bdd->prepare('INSERT INTO utilisateurs(login, password) VALUES (:login, :password)');


$req->execute(array("login" => $login, "password" => $password));


if(!empty($login) && !empty($password))
{


}else{
?>


<b>Pseudo ou MDP vide !</b>


<?php
}


if(empty($login) && empty($password))
{


}else{


session_start();
$_SESSION['login'] = $_POST['login'];
header('Location: tableaux.html');


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
        <span class="menu"><a href="#">Se connecter</a>
        </span>
    </div>
    
    <section>
        <article>
            <div class="title">S'inscrire à Trello</div><br>
            <div class="container2">
            <form action="Inscription.php">
                <label>Nom</label><br>
                <div class="form"><input type="text" placeholder="ex: nom"  name="login"></div><br><br>
                <label>Mot de passe</label><br>
                <div class="form"><input type="Password" placeholder="entrer votre mot de passe" name="password"></div><br>
                <button type="submit" name="submit">S'inscrire !</button>
            </form>
            </div>
        </article>
    </section>
    <div class="bloc"><a href="page_accueil.php">Vous avez déjà un compte ? Connectez-vous.</a></div>
    
</body>
</html>
