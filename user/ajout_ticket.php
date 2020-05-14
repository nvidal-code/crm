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
</head>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
      Tip 2: you can also add an image using data-image tag-->
      <!-- Intégration du menu -->
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
            <div class="col-md-8 center-card">
          <!-- formulaire de création d'un ticket -->
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Créer Ticket</h4>
                </div>
                <div class="card-body">
                  
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Magasin</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Nom du Contact</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">N° de téléphone</label>
                          <input type="tel" class="form-control">
                        </div>
                      </div>
                      </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Descriptif</label>
                          <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating"> Tapez ici le contenu de votre demande.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Ajouter</button>
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

</html>