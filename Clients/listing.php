<!doctype html>
<html lang="fr">

<head>
    <title>D-Connect Help</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> <!-- https://material.io/resources/icons/?icon=devices_other&style=baseline -->
    <!-- Material Kit CSS -->
    <link href="/../css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="/../css/main.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="azure" data-background-color="white">
            <?php include("../menu.php"); ?>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include("../navbar.php"); ?>
            <!-- fin de la Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <!-- Contenu de la page -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header card-header-info card-header-icon">
                                    <div class="card-icon">
                                        <a class="white-link" href="ajout-client.php">
                                            <i class="material-icons white-link">library_add</i>
                                        </a>
                                    </div>
                                    <p class="card-category">Créer un Compte Client</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card d-connect">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Base de donnée client</h4>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th>ID Client</th>
                                    <th>Enseigne</th>
                                    <th>Ville</th>
                                    <th>Responsable</th>
                                    <th>Numero de téléphone</th>
                                    <th>Logiciel</th>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once('../include/config.php');
                                    $reponse = $dbh->query('SELECT * FROM clients'); // On récupère tout le contenu de la table post
                                    while ($donnees = $reponse->fetch()) {       
                                        echo ('<tr>');                
                                        echo ('<td><a href="/clients/fiche-client.php/?id=' . $donnees['id'] . '">'. $donnees['id'] . '</a></td>');
                                        echo ('<td><a href="/clients/fiche-client.php/?id=' . $donnees['id'] . '">'. $donnees['enseigne'] . '</a></td>');                                       
                                        echo ('<td>'. $donnees['ville'] . '</td>');
                                        echo ('<td>'. $donnees['nomContact'] . '</td>');
                                        echo ('<td>'. $donnees['telephone'] . '</td>');
                                        echo ('</tr>');
                                    } 
                                    $reponse->closeCursor(); // Termine le traitement de la requête
                                    ?>
                                </tbody>
                            </table>
                        </div>                       
                                <!-- Section listing clients -->
                                
                                    <!-- Fin listing clients -->       
                                                    
                        </div>
                    </div>
                    <!-- Fin contenu de la page -->
                </div>
            </div>
        </div>
        <footer class="footer">
            <?php include("../footer.php"); ?>
        </footer>
    </div>
    </div>
</body>

</html>