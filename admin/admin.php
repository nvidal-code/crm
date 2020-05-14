<?php
require_once('../include/config.php');
session_start();
// On test les droits du comptes
    if ($_SESSION['isAdmin']) {
        echo "Welcome " . $_SESSION['authUser'];
    }else {
        echo "Get out you're not authorized";
    }
    
        // On récupère tout le contenu de la table jeux_video
        $reponse = $dbh->query('SELECT * FROM post');
// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <p>
    <strong>Contenus</strong> : <?php echo $donnees['content']; ?><br />
   </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>