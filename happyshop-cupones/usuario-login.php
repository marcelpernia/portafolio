<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Iniciar sesión</title>
	<?php include 'includes/essential.php'; ?>
</head>
<body class="account">
	<div class="form-box">
		<div class="top"><span>Iniciar sesión</span><p>¿No tienes cuenta? </p> <a href="usuario-registro.php">Regístrate</a></div>
		<form action="usuario-perfil.php">
			<span class="header"><i class="icon-lock"></i></span>
			<input type="email" placeholder="Correo electrónico" value="useradmin@happyshop.cr">
			<input type="password" placeholder="Contraseña" value="123123">
			<button class="l-button green bold">Ingresar</button>
			<div class="foot"><a href="usuario-recovery.php">Olvidé mi contraseña</a></div>
		</form>
	</div>
</body>
</html>