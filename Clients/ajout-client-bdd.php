<?php

require_once('../include/config.php');

// ajout du client à la bdd

    if (isset($_POST["client"]) && isset($_POST["nomContact"])) {
		var_dump($_POST["post"]);
        $sql = "INSERT INTO clients(client, nomContact, adresse, codePostal, ville, telephone, mail, description) VALUES (:client, :nomContact, :adresse, :codePostal, :ville, :telephone, :mail, :description )";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':client',  $_POST['client']);
        $stmt->bindValue(':nomContact', $_POST['nomContact']);
        $stmt->bindValue(':adresse', $_POST['adresse']);
        $stmt->bindValue(':codePostal', $_POST['codePostal']);
        $stmt->bindValue(':ville', $_POST['ville']);
        $stmt->bindValue(':telephone', $_POST['telephone']);
        $stmt->bindValue(':mail', $_POST['mail']);
        $stmt->bindValue(':description', $_POST['description']);
        $stmt->execute();
        return;
    }
    ?>