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

			<?php include("../menu.php"); ?>
		</div>
		<div class="main-panel">
			<!-- Navbar -->
			<?php include("../navbar.php"); ?>
			<!-- fin de la Navbar -->
			<div class="content">
				<div class="container-fluid">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="card card-stats">
							<div class="card-header card-header-info card-header-icon">
								<div class="card-icon">
									<a class="white-link" href="/admin/creat_documentation.php">
										<i class="material-icons white-link">library_add</i>
									</a>
								</div>
								<p class="card-category">Créer une documentation</p>
							</div>
							<div class="card-footer">
								<div class="stats">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Contenu de la page -->
				<div class="card d-connect">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Documentation D-connect</h4>
					</div>
					<div class="card-body">
						<div class="card-body-doc">
                            <!-- Section D-Movie -->
                            <div class="card card-stats">
							<div class="card-header card-header-info card-header-icon">
								<div class="card-icon">
									<a class="white-link" href="d-movie.php">
										<i class="material-icons white-link">library_add</i>
									</a>
								</div>
								<p class="card-category">D-Movie</p>
							</div>
							<div class="card-footer">
								<div class="stats">
								</div>
							</div>
                        </div>
                        <!-- Fin section D-movie -->
                        <!-- Section D-Sound -->
                        <div class="card card-stats">
							<div class="card-header card-header-info card-header-icon">
								<div class="card-icon">
									<a class="white-link" href="d-sound.php">
										<i class="material-icons white-link">library_add</i>
									</a>
								</div>
								<p class="card-category">D-Sound</p>
							</div>
							<div class="card-footer">
								<div class="stats">
								</div>
							</div>
                        </div>
                        <!-- Fin section D-Sound -->
                        <!-- Section D-Touch -->
                        <div class="card card-stats">
							<div class="card-header card-header-info card-header-icon">
								<div class="card-icon">
									<a class="white-link" href="d-touch.php">
										<i class="material-icons white-link">library_add</i>
									</a>
								</div>
								<p class="card-category">D-Touch</p>
							</div>
							<div class="card-footer">
								<div class="stats">
								</div>
							</div>
                        </div>
                        <!-- Fin section D-Touch -->
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
</body>

</html>
