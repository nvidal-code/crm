<!doctype html>
<html lang="fr">

<head>
    <title>D-Connect Assistance</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- https://material.io/resources/icons/?icon=devices_other&style=baseline -->
    <!-- Material Kit CSS -->
    <link href="../css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="../css/main.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>

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
                    <!-- formulaire de création de documentation -->
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Créer une documentation</h4>
                        </div>
                        <div class="card-body">
                                <!--Choix de la catégorie-->
                                <label for="category-select">Choisir une categorie :</label>
                                <div id="btnAddCategory" style="display:block">
                                    <?php include("./categorys.php"); ?>
                                    <i class="material-icons" id="addCategory">library_add</i>
                                </div>

                                <div id="btnSaveCategory">
                                    <div class="col-md-2">
                                        <input type="text" id="newCategory" class="form-control" placeholder="Categorie"
                                            value="">
                                    </div>
                                    <button type="submit" class="btn btn-primary"
                                        id="save-new-category">Enregistrer</button>
                                </div>

                                <!--Ajout d'un titre à l'article-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group bmd-form-group">
                                            <label class="bmd-label-floating"></label>
                                            <input type="text" id="titre" class="form-control" placeholder="Votre titre"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                <!--Ajout du contenu de l'article-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="editorjs"></div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right" id="publish">Publier</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin contenus de la page -->
    <footer class="footer">
        <?php include("../footer.php"); ?>
    </footer>
</body>
<script type="text/javascript" src="../javascript/main.js"></script>
    <script type="module" src="../javascript/content_editor.js"></script>
</html>