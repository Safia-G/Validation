<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
</head>


<div style="margin-left: 50px; margin-top:50px">
  <h1>Liste des pages:</h1>
</div>

<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=my_cms', 'root', '0000');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table news
$reponse = $bdd->query('SELECT * FROM `pages` LIMIT 50');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
  <div style="display:inline-flex;">
    <h3 style="margin-left:40px;">Page n°: <?php echo $donnees['id']; ?></h3>
    <h3 style="margin-left:40px;">Titre : <?php echo $donnees['title']; ?></h3>
    <h3 style="margin-left:40px;">Contenu : <?php echo $donnees['content']; ?></h3>
  </div>
  <?php
  echo "<td>";
      echo "<a href='update.php?id=". $donnees['id'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
      echo "<a href='delete.php?id=". $donnees['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
  echo "</td>";
   ?>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

<li><a href="create.php"> + Creer une page</a></li>

<li style="margin-top:50px;"><a href="/auth/logoutAction">Logout</a></li>
