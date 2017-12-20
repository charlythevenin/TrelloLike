<?php 
function bdd()
{
return $db = new PDO('mysql:host=localhost;dbname=bdd', 'user', 'password');;
}


function connexion($bdd,$pseudo,$password)
{

$req = $bdd->prepare("SELECT COUNT(*) AS nb FROM user WHERE Pseudo = :Pseudo AND Password = :Password");
$req->execute(array("Pseudo"=>$pseudo,"Password"=>$password));

$donne = $req->fetch();

	if($donne['nb'] == 1)
	{
		return true;
	}
	else
	{
		return false;
	}

}




function id_user($bdd,$pseudo,$password)
{

$req = $bdd->prepare("SELECT ID FROM user WHERE Pseudo = :Pseudo AND Password = :Password");
$req->execute(array("Pseudo"=>$pseudo,"Password"=>$password));

$donne = $req->fetch();

	return $donne['ID'];
}




function control_cookie($bdd,$id)
{
$req = $bdd->prepare("SELECT COUNT(*) AS nb FROM user WHERE ID = :ID");
$req->execute(array("ID"=>$id));

$donne = $req->fetch();

	if($donne['nb'] == 1)
	{
		return true;
	}
	else
	{
		return false;
	}
	
	
}
?>