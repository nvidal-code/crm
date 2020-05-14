<?php
    require_once('../include/config.php');
    session_start();


    if(!isset($_SESSION["isAdmin"]) || (isset($_SESSION["isAdmin"]) && !$_SESSION["isAdmin"])) {
        echo "Unauthorized Access";
        exit;
      }

   
    if (isset($_POST["name"])) {
        $sql = "INSERT INTO category(name) VALUES (:name);";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':name', $_POST["name"]);
        $stmt->execute();
    }

    $sql = "SELECT id, name FROM categories;";
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    
    $categories = $stmt->fetchAll();

    if (isset($_POST["name"])){    
        echo json_encode($categories);
        return;
    }

    ?>   
