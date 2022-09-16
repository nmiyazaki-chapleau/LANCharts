<!DOCTYPE html>

<html lang="fr">

<head>
	<title>LANCharts</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/items.css">
	<link rel="stylesheet" href="css/prod-bootstrap.css">
    
	<!--
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/prod-default.css">
	<link rel="stylesheet" href="css/animations.css">
	-->
</head>

<body>
	<div id="page-container">

		<nav class="navbar navbar-expand-md bg-light sticky-top">
			<div class="container">
				<a class="navbar-brand">LANCharts</a>
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-collapse collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
								aria-expanded="false">Nouveau</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Périphérique(s)</a></li>
								<li><a class="dropdown-item" href="#">Connection(s)</a></li>
								<li><a class="dropdown-item" href="#" onclick="newLayer('Layer 1')">Couche</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="#">Page</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!-- Contenu de la page, exclu nav, footer, etc. -->
		<main id="content-wrap" class="container">
			<div id="layersWrap">
			</div>
			<button id="newLayerBtn" class="m-4 btn btn-primary" onclick="newLayer()">Nouvelle couche</button>
		</main>
	</div>
</body>

</html>



<script type="text/javascript" src="js/new_elements.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
	integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
	crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>