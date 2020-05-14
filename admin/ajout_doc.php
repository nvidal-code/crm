<?php

require_once('../include/config.php');
session_start();
// ajout du post à la bdd

    if (isset($_POST["post"]) && isset($_POST["titre"])) {
		var_dump($_POST["post"]);
        $sql = "INSERT INTO documentation(title, content) VALUES (:title, :content)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':content',  $_POST['post']);
		$stmt->bindValue(':title', $_POST['titre']);
        $stmt->execute();
        return;
    }

// ajout d'une categorie à la bdd
   if (isset($_POST["name"])) {
		var_dump($_POST["name"]);
        $sql = "INSERT INTO category(name) VALUES (:name)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':name',  $_POST['name']);
        $stmt->execute();
        return;
    }
    
    ?>
