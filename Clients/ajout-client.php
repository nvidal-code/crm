<!doctype html>
<html lang="fr">

<head>
    <title>D-Connect Assistance</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> <!-- https://material.io/resources/icons/?icon=devices_other&style=baseline -->
    <!-- Material Kit CSS -->
    <link href="../css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="../css/main.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="azure" data-background-color="white">
            <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
      Tip 2: you can also add an image using data-image tag-->
            <!-- Intégration du menu -->
            <?php include("../menu.php"); ?>
            <?php include("clientManager.php"); ?>
            <?php include("clientClass.php"); ?>
            <?php require_once('../include/config.php'); ?>
        </div>
        <div class="main-panel">

            <!-- Navbar -->
            <?php include("../navbar.php"); ?>
            <!-- fin de la Navbar -->

            <div class="content">
                <div class="container-fluid">
                    <!-- Contenu de la page -->
                    <div class="row">
                        <div class="col-md-8 center-card">
                            <!-- formulaire de création d'un ticket -->
                            <div class="card">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">Ajouter un client</h4>
                                </div>
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" id="client" placeholder="Client">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" id="nom_contact" placeholder="Nom du Contact">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" id="adresse" placeholder="Adresse">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" id="code_postal" placeholder="Code postal">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="text" class="form-control" id="ville" placeholder="Ville">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="tel" class="form-control" id="telephone" placeholder="N° de téléphone">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group bmd-form-group">
                                                <label class="bmd-label-floating"></label>
                                                <input type="tel" class="form-control" id="mail" placeholder="E-mail">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <div class="form-group bmd-form-group">
                                                    <label class="bmd-label-floating"></label>
                                                    <textarea class="form-control" rows="5" id="description" placeholder="Informations complémentaires."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary pull-right" id='ajout_client'>Ajouter</button>
                                    <?php
                                    $client = new clientClass([
                                        'client' => 'Rivoli',
                                        'nomContact' => 'Vidal',
                                        'adresse' => '10 rue victor hugo',
                                        'codePostal' => '73540',
                                        'ville' => 'la bathie',
                                        'telephone' => '04 79 1 39 67',
                                        'mail' => 'nicolas.vidal@defours.com',
                                        'description' => 'Rien à voir ici'
                                    ]);

                                    $manager = new clientManager($dbh);

                                    $manager->add($client);
                                    var_dump($dbh);
                                    var_dump($client);

                                    ?>
                                    <div class="clearfix"></div>

                                </div>
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
<script type="text/javascript" src="../javascript/clients.js"></script>

</html>