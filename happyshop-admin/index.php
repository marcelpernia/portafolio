<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Iniciar sesión</title>
	<?php include 'includes/essential-head.php'; ?>
</head>
<body class="account">
	<div class="form-box">
		<div class="top"><span>Iniciar sesión</span></div>
		<form action="cupones-consultar.php">
			<span class="header"><i class="icon-lock"></i></span>
			<input type="text" placeholder="Usuario" value="admin">
			<input type="password" placeholder="Contraseña" value="12345" autofocus>
			<button class="l-button green bold">Ingresar</button>
			<div class="foot"><a href="usuario-recovery.php">Olvidé mi contraseña</a></div>
		</form>
	</div>
</body>
</html>