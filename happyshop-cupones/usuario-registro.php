<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<?php include 'includes/essential.php'; ?>
</head>
<body class="account register">
	<div class="form-box">
		<div class="top"><span>Registro</span><p>¿Ya tienes cuenta? </p> <a href="usuario-login.php">Iniciar sesión</a></div>
		<form action="">
			<span class="header"><i class="icon-profile"></i></span>
			<div class="col-6 no-padding pr10">
				<input type="text" placeholder="Nombre">
				<input type="text" placeholder="Cédula">
			</div>
			<div class="col-6 no-padding pl10">
				<input type="text" placeholder="Apellido">
				<input type="text" placeholder="Teléfono">
			</div>
			<span class="header"><i class="icon-location"></i></span>
			<div class="col-6 no-padding pr10">
				<select>
					<option value="">Provincia</option>
					<option value="">San José</option>
					<option value="">Heredia</option>
					<option value="">Alajuela</option>
					<option value="">Cartago</option>
					<option value="">Guanacaste</option>
					<option value="">Limón</option>
					<option value="">Puntarenas</option>
				</select>
			</div>
			<div class="col-6 no-padding pl10">
				<select>
					<option value="">Cantón</option>
				</select>
			</div>
			<span class="header"><i class="icon-lock"></i></span>
			<div class="col-12 no-padding">
				<input type="email" placeholder="Correo electrónico">
			</div>
			<div class="col-6 no-padding pr10"><input type="password" placeholder="Contraseña"></div>
			<div class="col-6 no-padding pl10"><input type="password" placeholder="Repetir contraseña"></div>
			<label class="foot"><input type="checkbox">Acepto los <a href="">Términos y condiciones</a></label>
			<button class="l-button green bold">Registrarme</button>
		</form>
	</div>
</body>
</html>