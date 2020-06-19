<?php

require_once('../include/config.php');
require_once("clientManager.php");
require_once("clientClass.php");

    // Récupération des valeurs passé dans le formulaires
    $enseigne = $_POST["enseigne"];
    $compte = $_POST["compte"];
    $nomContact = $_POST["nomContact"];
    $adresse = $_POST["adresse"];
    $codePostal = $_POST["codePostal"];
    $ville = $_POST["ville"];
    $telephone = $_POST["telephone"];
    $mail = $_POST["mail"];
    $description = $_POST["description"];

    // Création d'un tableau d'objet client
    $newClient = new clientClass([
        'enseigne' => $enseigne,
        'compte' => $compte,
        'nomContact' => $nomContact,
        'adresse' => $adresse,
        'codePostal' => $codePostal,
        'ville' => $ville,
        'telephone' => $telephone,
        'mail' => $mail,
        'description' => $description
    ]);

    // $client = new clientClass ('rivoli','vidal');


    //  Création de mon objet client manager
    $manager = new clientManager($dbh);

    // On passe le tableau d'objet dans le manager 
    $manager->add($newClient);
    var_dump($dbh);
    var_dump($newClient);


    // redirection vers la page du formulaire.
    header('Location: ajout-client.php');

    
    ?>