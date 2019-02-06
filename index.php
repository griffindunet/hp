<?php

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



$reponse = $bdd->query('SELECT * FROM personnages');
  $reponse1 = $bdd->query('SELECT * FROM films');
    $reponse2 = $bdd->query('SELECT * FROM maisons');
  $reponse3 = $bdd->query('SELECT * FROM sors');
  $comment = $bdd->query('SELECT * FROM comment');
$pdostat= $bdd->prepare('INSERT INTO Comment VALUES (NULL,:pseudo,:comment)');

//on lie chaque marqueur 

$pdostat->bindValue(':pseudo',$_POST['pseudo'],PDO::PARAM_STR);
$pdostat->bindValue(':comment',$_POST['commentaire'],PDO::PARAM_STR);


//execution de la requete 

$insertok = $pdostat->execute();

if($insertok){


  $message="Votre message a bien été envoyé ";
}
else {

}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Guide Harry Potter</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<link  rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="https://raw.githubusercontent.com/HubSpot/pace/v1.0.0/pace.min.js"></script>
</head>
<body>
<div id="loader-wrapper">
  <div id="loader"></div>
  
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
  
</div>

<div id="content">
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Remy wilmet Portfolio </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Index
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mes sites web </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Mes projets </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
<img src="https://media.virginradio.fr/article-3587673-head-f4/voldemort-villians-harry-potter.jpg" style="display: block;
  margin-left: auto;
  margin-right: auto;
  width: 5'slow'0%;">
    
  </div>
</div>

<br>
<div style="display: block;  margin-left: auto;  margin-right: auto;  width: 50%;">
    <button id="perso"class="btn btn-primary">Perso Harry Potter</button>
   <button id="film" class="btn btn-primary">Films Harry Potter</button>
      <button id="maison" class="btn btn-primary">Maisons Harry Potter</button>
      <button id="sors" class="btn btn-primary">Sors Harry Potter</button>
      <button id="tout" class="btn btn-primary">Tout afficher</button>


   <div class="perso">

<h2> Listes des personnages </h2><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenoms</th>
      <th scope="col">Age</th>
            <th scope="col">Film</th>
                  <th scope="col">maison</th>


    </tr>
  </thead>

<?php

// Si tout va bien, on peut continuer


// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>

<tr>
 
      <td><?php echo $donnees['ID']; ?></td>
      <td><?php echo $donnees['Nom']; ?></td>
      <td><?php echo $donnees['Prenom']; ?></td>
      <td><?php echo $donnees['Age']; ?></td>
      <td><?php echo $donnees['film']; ?></td>
      <td><?php echo $donnees['maison']; ?></td>
  
</tr>

<?php
}


?>

</table>
</div>
<div class="film">
<h2> Listes des films </h2><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titres des films </th>
    


    </tr>
  </thead>


  <?php 

// On affiche chaque entrée une à une
while ($films = $reponse1->fetch())
{
?>

<tr>
 
      <td><?php echo $films['id']; ?></td>
      <td><?php echo $films['Noms']; ?></td>

  
</tr>


<?php
}


?>

</table>
</div>
<div class="maison">
<h2> Listes des maisons </h2><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Noms des maisons </th>
      <th scope="col">Noms des fondateurs </th>

    


    </tr>
  </thead>


  <?php 

// On affiche chaque entrée une à une
while ($maisons = $reponse2->fetch())
{
?>

<tr>
 
      <td><?php echo $maisons['ID']; ?></td>
      <td><?php echo $maisons['Noms']; ?></td>
      <td><?php echo $maisons['Fondateurs']; ?></td>

  
</tr>


<?php
}

$reponse1->closeCursor(); // Termine le traitement de la requête

?>

</table>
</div>
<div class="sors">
<h2> Listes des sors </h2><br>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Noms des sors </th>
      <th scope="col">Interdit </th>

    


    </tr>
  </thead>


  <?php 

// On affiche chaque entrée une à une
while ($sors = $reponse3->fetch())
{
?>

<tr>
 
      <td><?php echo $sors['ID']; ?></td>
      <td><?php echo $sors['Noms']; ?></td>
      <td><?php echo $sors['Interdit']; ?></td>

  
</tr>


<?php
}

$reponse1->closeCursor(); // Termine le traitement de la requête

?>
</table>
</div>
<!-- systeme de commentaire -->

<hr>
<h3> Commentaires </h3>
<div class="alert alert-primary" role="alert">

<p><?php echo $message; ?></p>
</div>


<div id="commentaire">
 <form action="index.php" method="post">
   <p>
   <label for="pseudo"> Pseudo</label>
  <input type="text" name="pseudo"><br>
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment" name="commentaire"></textarea>
  <p><input type="submit" value="ok"></p>

  </p></form>
<div class="commentaire">


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pseudo </th>
      <th scope="col">Commentaire </th>

    


    </tr>
  </thead>


  <?php 

// On affiche chaque entrée une à une
while ($commentaire = $comment->fetch())
{
?>

<tr>
 
      <td><?php echo $commentaire['id']; ?></td>
      <td><?php echo $commentaire['pseudo']; ?></td>
      <td><?php echo $commentaire['comment']; ?></td>

  
</tr>


<?php
}

$reponse1->closeCursor(); // Termine le traitement de la requête

?>
</table>
</div>



</div>
</body>
</form>
</html>
<script type="text/javascript">
  
$(function() {
  $('.perso').hide();
    $('.film').hide(); //cacher rmc sport 1 au lancement de la page
  $('.sors').hide(); //cacher rmc sport 1 au lancement de la page
  $('.maison').hide(); //cacher rmc sport 1 au lancement de la page
 //cacher rmc sport 1 au lancement de la page
});

$('#perso').click(function(){ 
  $('.perso').toggle('slow');
});
$('#film').click(function(){ 
  $('.film').toggle('slow');
});

$('#maison').click(function(){ 
  $('.maison').toggle('slow');
});
$('#sors').click(function(){ 
  $('.sors').toggle('slow');
});
$('#tout').click(function(){ 
  $('.perso').toggle('slow');

   $('.film').toggle('slow'); 
  $('.sors').toggle('slow'); 
  $('.maison').toggle('slow');



});

</script>

