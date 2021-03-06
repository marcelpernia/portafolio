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
			<!-- Contenido aqui. -->

			<!-- Filtro -->
			<form action="" class="form">
				
				<div class="col-12">
					<div class="col-title">Filtrar promociones por</div>
					<div class="area">
						<div class="col-6">
							<select>
								<option value="">Todas las promociones</option>
								<option value="">Comida con 50% de descuento en el restaurante costa rica</option>
								<option value="">Ropa al 20% de descuento en la zapatería costa rica</option>
								<option value="">Promoción 3</option>
								<option value="">Promoción 4</option>
							</select>
						</div>
						<div class="col-2">
							<input type="text" placeholder="Desde la fecha">
						</div>
						<div class="col-2">
							<input type="text" placeholder="hasta la fecha">
						</div>
						<div class="col-2">
							<select>
								<option value="">Activas</option>
								<option value="">Vencidas</option>
							</select>
						</div>
					</div>
				</div>

				<div class="col-12 no-padding">
					<button class="l-button blue right mr15">Filtrar</button>
				</div>
			</form>
				<!-- Finaliza filtro -->

			<div class="col-12">
				<div class="col-title">Promociones</div>
				<div class="area no-padding">
					<table class="table zebra">
						<tr>
							<th>Código promoción</th>
							<th>Título</th>
							<th>Visitas</th>
							<th>Cupones vendidos</th>
							<th>Estatus</th>
							<th width="1">Ver</th>
						</tr>
						<tr>
							<td>6465651</td>
							<td>Comida con 50% de descueno en el restaurante costa rica</td>
							<td>40</td>
							<td>30</td>
							<td>Activa</td>
							<td align="center"><a target="_blank" href="http://marcelpernia.website/happyshop-cupones/detalle-cupon.php" class="icon-link"></a></td>
						</tr>
						<tr>
							<td>65161</td>
							<td>Ropa al 20% de descuento en la zapatería costa rica</td>
							<td>12</td>
							<td>8</td>
							<td>Activa</td>
							<td align="center"><a target="_blank" href="http://marcelpernia.website/happyshop-cupones/detalle-cupon.php" class="icon-link"></a></td>
						</tr>
						<tr>
							<td>6465651</td>
							<td>Comida con 50% de descueno en el restaurante costa rica</td>
							<td>8</td>
							<td>7</td>
							<td>Vencida</td>
							<td align="center"><a target="_blank" href="http://marcelpernia.website/happyshop-cupones/detalle-cupon.php" class="icon-link"></a></td>
						</tr>
					</table>
				</div>
			</div>
			

			<!-- Finaliza contenido -->
		</div>
	</div>
</div>


<?php include 'includes/essential-footer.php'; ?>
</body>
</html>