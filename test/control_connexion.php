<?php 
session_start();
require_once("modele_connexion.php");
$bdd = bdd();

if(isset($_POST['pseudo']) AND isset($_POST['password']))
{
	if(connexion($bdd,$_POST['pseudo'],$_POST['password']))
	{
		$_SESSION['id'] = id_user($bdd,$_POST['pseudo'],$_POST['password']);
		
		if(isset($_POST['souvenir']))
		{
			setcookie("id_user",$_SESSION['id'],time()+60*60*24*30);
		}
		
		require_once("code_secret.php");
	}
	else
	{
		require_once("erreur_connexion.php");
	}
}
else if(isset($_GET['deco']))
{
	session_destroy();
	setcookie('id_user');
 
	unset($_COOKIE['id_user']);
	require_once("vue_connexion.php");
}
else if(isset($_SESSION['id'])) 
{
	require_once("code_secret.php");
}
else if(isset($_COOKIE['id_user']))
{
		if(control_cookie($bdd,$_COOKIE['id_user']))
		{
		$_SESSION['id'] = $_COOKIE['id_user'];	
		require_once("code_secret.php");
		}
}

else
{
	require_once("vue_connexion.php");
}
?>