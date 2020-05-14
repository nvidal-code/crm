
<!--Lister les categories-->
<div class="dropdown">
	<select name="one" class="dropdown-select">
		<?php 
		require_once('../include/config.php');
		$reponse = $dbh->query('SELECT * FROM category');// On récupère tout le contenu de la table category
  		while ($donnees = $reponse->fetch())// On affiche chaque entrée une à une
              {
	?>
		<option value="<?php echo  $donnees['id']; ?>"><?php echo  $donnees['name']; ?></option>
		<?php
			  }
		$reponse->closeCursor(); // Termine le traitement de la requête
	?>
	</select>
</div>

