<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mesabierta - Ayuda</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/helpers.js"></script>
	<script src="js/prefixfree.min.js"></script>
</head>
<body>

	<?php include 'includes/header.php'; ?>

	<div class="breadcrumbs">
		<div class="wrap">
			<ul>
				<li>Inicio</li>
			</ul>
		</div>
	</div>

	<div class="content">
		<div class="wrap">
			<ul class="category-menu">
				<li class="current"><a href="#">Categoría A</a></li>
				<li><a href="#">Categoría b</a></li>
				<li><a href="#">Categoría C</a></li>
				<li><a href="#">Categoría D</a></li>
			</ul>

			<div class="main-content">
				<p class="description">Resultados para: <strong><?php echo $_GET['search']; ?></strong></p>
				
				<div class="questions">
					<a href="">¿Lorem ipsum dolor sit amet, consectetur?</a>
					<a href="">¿Adipisicing elit. Adipisci, tempore ab officia distinctio, temporibus provident?</a>
					<a href="">¿Amet accusamus laborum voluptate velit fugit, quidem dolores?</a>
				</div>
			</div>
		</div>
	</div>

	<?php include 'includes/footer.php'; ?>
</body>
</html>