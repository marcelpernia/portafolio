<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mi perfil</title>
	<?php include 'includes/essential.php'; ?>
</head>
<body class="gray">
<?php include 'includes/head.php'; ?>
<div class="min-height">
	<div class="wrap">
		
		<div class="col-12">
			<div class="area">
				<div class="user-pic" style="background-image:url(https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg);"></div>
				<div class="left">
					<div class="user-name">Marcos Gómez</div>
					<a id="change-pass-toggle" href="javascript:;" class="s-button light left mr10">Modificar contraseña</a>
					<a href="mensaje-advertencia.php" class="s-button light left mr10">Cancelar mi cuenta</a>
					<a href="" class="s-button light left">Cerrar sesión</a>
				</div>
			<!-- 	<div class="right">
					<div class="user-points">500</div>
				</div> -->
			</div>
		</div>

		<div id="change-pass-region">
			<div class="col-12">
				<div class="area">
					<form action="" class="form">
						<div class="col-4"><input type="password" placeholder="Contraseña actual"></div>
						<div class="col-4"><input type="password" placeholder="Contraseña nueva"></div>
						<div class="col-4"><input type="password" placeholder="Repita contraseña nueva"></div>
					</form>
				</div>
			</div>
			<div class="col-12 no-padding">
				<a href="usuario-perfil.php" class="m-button green left right mr15">Guardar</a>
				<a href="usuario-perfil.php" class="m-button light left right mr15">Cancelar</a>
			</div>
		</div>

		<div class="col-12">
			<div class="col-title">Mis datos personales</div>
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

		<div class="col-12 no-padding">
			<a href="usuario-perfil-editar.php" class="m-button green left right mr15">Editar mis datos</a>
		</div>

		<div class="col-12">
			<div class="col-title">Mis cupones</div>
			<div class="area no-padding">
				<table class="table zebra">
					<tr>
						<th>Número de cupón</th>
						<th>Descripción</th>
					</tr>
					<tr>
						<td>6465651</td>
						<td>Comida con 50% de descueno en el restaurante costa rica</td>
					</tr>
					<tr>
						<td>65161</td>
						<td>Ropa al 20% de descuento en la zapatería costa rica</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>