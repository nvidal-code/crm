<?php

require_once('../include/config.php');
require_once("clientManager.php");
require_once("clientClass.php");

    
    $client = $_POST["client"];
    $nomContact = $_POST["nomContact"];
    $adresse = $_POST["adresse"];
    $codePostal = $_POST["codePostal"];
    $ville = $_POST["ville"];
    $telephone = $_POST["telephone"];
    $mail = $_POST["mail"];
    $description = $_POST["description"];

    $newClient = new clientClass([
        'client' => $client,
        'nomContact' => $nomContact,
        'adresse' => $adresse,
        'codePostal' => $codePostal,
        'ville' => $ville,
        'telephone' => $telephone,
        'mail' => $mail,
        'description' => $description
    ]);

    // $client = new clientClass ('rivoli','vidal');

    $manager = new clientManager($dbh);

    $manager->add($newClient);
    var_dump($dbh);
    var_dump($newClient);

    header('Location: ajout-client.php');

    
    ?>