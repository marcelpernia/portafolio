<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>HappyShop - Mundo de Promociones</title>
	<meta name="description" content="">
	<?php include 'includes/essential.php'; ?>
	<link rel="stylesheet" href="js/lib/slider/style.css">
</head>
<body class="page-home">

<?php include 'includes/head.php'; ?>

<div class="wrap">
	<div id="slides">
		<a href="#"><img src="images/slider1.jpg" alt=""></a>
		<a href="#"><img src="images/slider2.jpg" alt=""></a>
	</div>
	<div class="sidebar-trigger icon-menu" style="display: none;"></div>
</div>

<div class="wrap clearfix">
	<div class="content">
		<div class="sidebar">
			<select class="region">
				<option value="">San José</option>
				<option value="">Heredia</option>
				<option value="">Alajuela</option>
				<option value="">Cartago</option>
				<option value="">Guanacaste</option>
				<option value="">Limón</option>
				<option value="">Puntarenas</option>
			</select>
			<ul class="menu-category">
				<li><a href="">TODO</a></li>
				<li><a class="current" href="">GASTRONOMÍA</a></li>
				<li><a href="">BELLEZA</a></li>
				<li><a href="">SALUD</a></li>
				<li><a href="">VIAJES</a></li>
				<li><a href="">RECREACIÓN</a></li>
				<li><a href="">ROPA</a></li>
			</ul>

			<div class="banners">
				<a href=""><img src="images/banner1.jpg"></a>
				<a href=""><img src="images/banner2.jpg"></a>
			</div>
		</div>
		
		<div class="main">
			<div class="header"><h2>Gastronomía</h2></div>
			<div class="offers-wrap">

				<a href="detalle-cupon.php" class="item-offer" title="Restaurante La Colonia">
					<div class="img-wrap">
						<div class="img" style="background:url(images/food1.jpg);" title="Restaurante La Colonia"></div>
					</div>
					<h1 class="title">Restaurante La Colonia</h1>
					<p class="description">Disfruta de un delicioso plato de comida mediterránea. Aprovecha esta promoción que es por poco tiempo. Llévate tr... </p>
					<div class="details">
						<ul class="info">
							<li class="icon-hour-glass">Válido hasta el 30/05/2016</li>
							<li class="icon-discount">40% de descuento</li>
							<li class="icon-shopping-cart">32 vendidos</li>
						</ul>
						<span class="price">
							<span>¢4.500</span>
							¢3.000
						</span>
					</div>
				</a>

				<a href="detalle-cupon.php" class="item-offer">
					<div class="img-wrap">
						<div class="img" style="background:url(images/food2.jpg);"></div>
					</div>
					<h1 class="title">Restaurante La Colonia</h1>
					<p class="description">Disfruta de un delicioso plato de comida mediterránea. Aprovecha esta promoción que es por poco tiempo. Llévate tr... </p>
					<div class="details">
						<ul class="info">
							<li class="icon-hour-glass">Válido hasta el 30/05/2016</li>
							<li class="icon-discount">40% de descuento</li>
							<li class="icon-shopping-cart">32 vendidos</li>
						</ul>
						<span class="price">
							<span>¢4.500</span>
							¢3.000
						</span>
					</div>
				</a>

				<a href="detalle-cupon.php" class="item-offer">
					<div class="img-wrap">
						<div class="img" style="background:url(images/food3.jpg);"></div>
					</div>
					<h1 class="title">Restaurante La Colonia</h1>
					<p class="description">Disfruta de un delicioso plato de comida mediterránea. Aprovecha esta promoción que es por poco tiempo. Llévate tr... </p>
					<div class="details">
						<ul class="info">
							<li class="icon-hour-glass">Válido hasta el 30/05/2016</li>
							<li class="icon-discount">40% de descuento</li>
							<li class="icon-shopping-cart">32 vendidos</li>
						</ul>
						<span class="price">
							<span>¢4.500</span>
							¢3.000
						</span>
					</div>
				</a>

				<a href="detalle-cupon.php" class="item-offer">
					<div class="img-wrap">
						<div class="img" style="background:url(images/food4.jpg);"></div>
					</div>
					<h1 class="title">Restaurante La Colonia</h1>
					<p class="description">Disfruta de un delicioso plato de comida mediterránea. Aprovecha esta promoción que es por poco tiempo. Llévate tr... </p>
					<div class="details">
						<ul class="info">
							<li class="icon-hour-glass">Válido hasta el 30/05/2016</li>
							<li class="icon-discount">40% de descuento</li>
							<li class="icon-shopping-cart">32 vendidos</li>
						</ul>
						<span class="price">
							<span>¢4.500</span>
							¢3.000
						</span>
					</div>
				</a>

			</div>
		</div>
	</div>
</div>

<?php include 'includes/footer.php'; ?>

<script src="js/lib/slider/jquery.slides.min.js"></script>
<script src="js/lib/slider/functions.js"></script>
</body>
</html>