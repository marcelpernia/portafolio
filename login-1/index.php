<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
	<meta charset="UTF-8">
	<title>Login form</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/prefixfree.min.js"></script>
</head>
<body class="login">
	<form class="login-form">
		<h1>¡Bienvenido!</h1>
    	<h2>Iniciar sesión</h2>
	    <div class="row">
	 		<label class="user">
				<span>Nombre de Usuario</span>
				<input name="email" type="text" id="user" autofocus>
			</label>
	    </div>
	    <div class="row">
			<label class="pass">
				<span>Contraseña</span>
				<input name="password" type="password" id="pass">
			</label>
	    </div>
		<div class="row">
			<button name="Submit" type="submit">Iniciar sesión</button>
		</div>
		<a href="">Olvidé mi contraseña</a>

	    <div class="logo">
	      <img src="images/logotipo.png?UYwORIZlruB" alt="Logo Mesabierta">
	    </div>
	</form>
</body>
</html>