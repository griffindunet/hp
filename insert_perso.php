<?php 

//conneion bdd 

$host="localhost";
$dbname="hp_fan";
$name="root";
$mdp="";

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $name, $mdp);
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$pdostat= $bdd->prepare('INSERT INTO personnages VALUES (NULL,:nom,:prenom,:age,:film,:maison)');

//on lie chaque marqueur 

$pdostat->bindValue(':nom',$_POST['perso'],PDO::PARAM_STR);
$pdostat->bindValue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
$pdostat->bindValue(':age',$_POST['age'],PDO::PARAM_STR);
$pdostat->bindValue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
$pdostat->bindValue(':film',$_POST['film1'],PDO::PARAM_STR);
$pdostat->bindValue(':maison',$_POST['maison'],PDO::PARAM_STR);

//execution de la requete 

$insertok = $pdostat->execute();

if($insertok){


	$message="ok";
}
else {

	$message ="echec";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> test</h1>
<p><?php echo $message; ?></p>
</body>
</html>