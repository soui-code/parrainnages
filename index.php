<?php
include 'include/nav_modif.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Systeme de parrainage</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
	<!-- NAV -->
	<?php include "include/nav.php"; ?>
	<!-- /NAV -->
	<div class="container">
	</div>

	<?php include "include/link.php"; ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h1 class="mt-5"> Bienvennue <?php echo $nom?> sur l'espase de parrainage</h1>
				<p class="lead">
					Ce site est un systeme de parrainage ( parrain filleul)
				</p>
				
				<ul class="list-unstyled">
					<li><a href="http://localhost/parrainages/parrainage.php">Inviter mes amis</a></li>
					<?php foreach ($result as $key => $value) { ?>
						<li>Le nom de votre parrain est <?php echo $value['nom']?></</li>
						<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</body>

</html>