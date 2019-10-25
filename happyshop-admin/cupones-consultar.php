<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>HappyShop Admin</title>
	<?php include 'includes/essential-head.php'; ?>
</head>
<body>
<div class="content">
	<?php include 'includes/menu.php'; ?>
	<div class="main">
		<?php include 'includes/head.php'; ?>
		<div class="main-content">
			<div class="col-12">
				<div class="col-title">Consulta y validación de cupones vendidos</div>
				<div class="area">
					<form action="" class="form">
						<div class="col-4"><input type="text" placeholder="Código del cupón"></div>
						<div class="col-4"><button class="s-button blue">Consultar</button></div>
					</form>
				</div>
			</div>

			<!-- Resultado de la búsqueda -->
			<div class="col-12">
				<div class="area no-padding">
					<table class="table">
						<tr>
							<th>Número de cupón</th>
							<th>Descripción</th>
							<th>Fecha compra</th>
							<th>Estatus</th>
						</tr>
						<tr>
							<td>6465651</td>
							<td>Comida con 50% de descueno en el restaurante costa rica</td>
							<td>15/08/2016</td>
							<td><span href="" class="ss-button tag blue">Activo</span></td>
						</tr>
					</table>
				</div>
			</div>

			<div class="col-12">
				<div class="col-title">Datos del comprador</div>
				<div class="area">
					<div class="col-6 no-padding">
						<table class="table dual">
							<tr>
								<th width="1">Nombre:</th>
								<td>Marcos</td>
							</tr>
							<tr>
								<th>Apellido:</th>
								<td>Gómez</td>
							</tr>
							<tr>
								<th>E-mail:</th>
								<td>gomezzmarcos12@gmail.com</td>
							</tr>
							<tr>
								<th>Móvil:</th>
								<td>5466548</td>
							</tr>
						</table>
					</div>
					<div class="col-6 no-padding">
						<table class="table dual">
							<tr>
								<th width="1">Dirección:</th>
								<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
							</tr>
							<tr>
								<th>Ciudad:</th>
								<td>Costa Rica</td>
							</tr>
							<tr>
								<th>Provincia:</th>
								<td>La Provincia</td>
							</tr>
							<tr>
								<th>Cantón:</th>
								<td>El Cantón</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="col-12">
				<a href="" class="m-button blue">Imprimir recibo de entrega</a>
				<a href="" class="m-button green">Marcar cupón como redimido</a>

			</div>

		</div>
	</div>
</div>


<?php include 'includes/essential-footer.php'; ?>
</body>
</html>