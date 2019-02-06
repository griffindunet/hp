  <?php
    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "tintin06R3MY") // Si le mot de passe est bon
    {
    // On affiche les codes
    ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="insert.php" method="post">
	<p>
		<label for="titre"> Tire du film </label>
		<input id="film" type="text" name="film">

	</p>
	<p><input type="submit" value="ok"></p>
</form>
<form action="insert_perso.php" method="post">
	<p>
		<label for="titre"> Nom du personnage</label>
		<input id="perso" type="text" name="perso"><br>
<label for="titre"> prenom du personnage</label>
		<input id="perso" type="text" name="prenom"><br>
		<label for="titre"> age du personnage</label>
		<input id="perso" type="text" name="age"><br>
		<label for="titre"> premiere apparition</label>
		<input id="perso" type="text" name="film1"><br>
		<label for="titre"> maison du perso </label>
		<input id="perso" type="text" name="maison"><br>
	</p>
	<p><input type="submit" value="ok"></p>
</form>
</body>
    <?php
    }
    else // Sinon, on affiche un message d'erreur
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
</html>