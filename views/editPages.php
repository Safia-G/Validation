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
<table style="border: 1px solid black">
  <thead>
  <tr style="border: 1px solid black">
  <th><h3 style="margin-left:20px">Page n°</h3></th>
  <th><h3 style="margin-left:100px">Titre</h3></th>
  <th><h3 style="margin-left:100px">Contenu</h3></th>
  </tr>
</thead>
<tbody>
  <tr>
    <td><p style="text-align:center; padding:50px"><?php echo $donnees['id']; ?></p></td>
    <td><p style="text-align:center; padding:50px"><?php echo $donnees['title']; ?></p></td>
    <td><p style="text-align:center; padding:50px"><?php echo $donnees['content']; ?></p></td>
  </tr>
</tbody>
</table>

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
