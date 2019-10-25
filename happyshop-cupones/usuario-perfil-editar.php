<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<?php include 'includes/essential.php'; ?>
</head>
<body class="gray">
<?php include 'includes/head.php'; ?>
<div class="min-height">
	<div class="wrap">
		<div class="col-12">
			<div class="col-title">Editar mis datos personales</div>
			<div class="area">
				<form action="" class="form">
					<div class="col-6 no-padding">
						<table class="table dual">
							<tr>
								<th width="1">Nombre:</th>
								<td><input type="text" value="Marcos"></td>
							</tr>
							<tr>
								<th>Apellido:</th>
								<td><input type="text" value="Gómez"></td>
							</tr>
							<tr>
								<th>E-mail:</th>
								<td><input type="email" value="gomezzmarcos12@gmail.com"></td>
							</tr>
							<tr>
								<th>Móvil:</th>
								<td><input type="text" value="5466548"></td>
							</tr>
						</table>
					</div>
					<div class="col-6 no-padding">
						<table class="table dual">
							<tr>
								<th width="1">Dirección:</th>
								<td><input type="text" value="Lorem ipsum dolor sit amet, consectetur adipisicing elit."></td>
							</tr>
							<tr>
								<th>Ciudad:</th>
								<td><input type="text" value="Costa Rica"></td>
							</tr>
							<tr>
								<th>Provincia:</th>
								<td><input type="text" value="La Provincia"></td>
							</tr>
							<tr>
								<th>Cantón:</th>
								<td><input type="text" value="El Cantón"></td>
							</tr>
						</table>
					</div>
				</form>
			</div>
		</div>
	
		<div class="col-12 no-padding">
			<a href="usuario-perfil.php" class="m-button green left right mr15">Guardar</a>
			<a href="usuario-perfil.php" class="m-button light left right mr15">Cancelar</a>
		</div>
	</div>

</div>
<?php include 'includes/footer.php'; ?>
</body>
</html>