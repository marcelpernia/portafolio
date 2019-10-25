<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mesabierta Staff</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/prefixfree.min.js"></script>
	<script src="js/helpers.js"></script>
	<style>
		div[class*="col-"] {}
		.area {text-align: center;}
		.separator {width: 100%;float: left;background: #BDBDBD; height: 30px;}
		table {text-align: left;}
	</style>
</head>
<body>
	<div class="col-12">
		<div class="col-title">Sistema de columnas</div>
		<div class="area">.col-12</div>
	</div>
	
	<div class="col-1"><div class="area">.col-1</div></div>
	<div class="col-11"><div class="area">.col-11</div></div>
	
	<div class="col-2"><div class="area">.col-2</div></div>
	<div class="col-10"><div class="area">.col-10</div></div>

	<div class="col-3"><div class="area">.col-3</div></div>
	<div class="col-9"><div class="area">.col-9</div></div>

	<div class="col-4"><div class="area">.col-4</div></div>
	<div class="col-8"><div class="area">.col-8</div></div>
	
	<div class="col-5"><div class="area">.col-5</div></div>
	<div class="col-7"><div class="area">.col-7</div></div>
	
	<div class="col-6"><div class="area">.col-6</div></div>
	<div class="col-6"><div class="area">.col-6</div></div>

	<div class="col-7"><div class="area">.col-7</div></div>
	<div class="col-5"><div class="area">.col-5</div></div>

	<div class="col-8"><div class="area">.col-8</div></div>
	<div class="col-4"><div class="area">.col-4</div></div>

	<div class="col-9"><div class="area">.col-9</div></div>
	<div class="col-3"><div class="area">.col-3</div></div>

	<div class="col-10"><div class="area">.col-10</div></div>
	<div class="col-2"><div class="area">.col-2</div></div>

	<div class="col-11"><div class="area">.col-11</div></div>
	<div class="col-1"><div class="area">.col-1</div></div>

	<div class="separator"></div>

	<div class="col-12">
		<div class="col-title">.col-title</div>
		<div class="area">.area</div>
	</div>

	<div class="separator"></div>

	<div class="col-6">
		<div class="col-title">Tabla normal</div>
			<div class="area no-padding">
				<table class="table">
					<tr>
						<th>Encabezado (th)</th>
						<th>Encabezado (th)</th>
						<th>Encabezado (th)</th>
					</tr>
					<tr>
						<td>celda</td>
						<td>celda</td>
						<td>celda</td>
					</tr>
					<tr>
						<td>celda</td>
						<td>celda</td>
						<td>celda</td>
					</tr>
					<tr>
						<td>celda</td>
						<td>celda</td>
						<td>celda</td>
					</tr>
				</table>
			</div>
	</div>
	<div class="col-6">
		<div class="col-title">Tabla estilo zebra</div>
			<div class="area no-padding">
				<table class="table zebra">
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Telf</th>
					</tr>
					<tr>
						<td>Jon</td>
						<td>Dow</td>
						<td>555 44 32</td>
					</tr>
					<tr>
						<td>Michael</td>
						<td>Ludwin</td>
						<td>565 88 65</td>
					</tr>
					<tr>
						<td>Jon</td>
						<td>Dow</td>
						<td>555 44 32</td>
					</tr>
				</table>
			</div>
	</div>
	<div class="col-6">
		<div class="col-title">Tabla bordeada</div>
		<div class="area">
			<table class="table bordered">
				<tr>
					<th>Encabezado (th)</th>
					<th>Encabezado (th)</th>
					<th>Encabezado (th)</th>
				</tr>
				<tr>
					<td>celda</td>
					<td>celda</td>
					<td>celda</td>
				</tr>
				<tr>
					<td>celda</td>
					<td>celda</td>
					<td>celda</td>
				</tr>
				<tr>
					<td>celda</td>
					<td>celda</td>
					<td>celda</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="col-6">
		<div class="col-title">Tabla con enfoque</div>
			<div class="area no-padding">
				<table class="table focus">
					<tr>
						<th>Encabezado (th)</th>
						<th>Encabezado (th)</th>
						<th>Encabezado (th)</th>
					</tr>
					<tr>
						<td>celda</td>
						<td>celda</td>
						<td>celda</td>
					</tr>
					<tr>
						<td>celda</td>
						<td>celda</td>
						<td>celda</td>
					</tr>
					<tr>
						<td>celda</td>
						<td>celda</td>
						<td>celda</td>
					</tr>
				</table>
			</div>
	</div>

	<div class="col-12">
		<div class="col-title">Tabla dual</div>
		<div class="area">
			<div class="col-4 no-padding">
					<table class="table dual">
						<tr>
							<th width="1">Nombre:</th>
							<td>Jhon Doe</td>
						</tr>
						<tr>
							<th>E-mail:</th>
							<td>jdoe@gmail.com</td>
						</tr>
						<tr>
							<th>Móvil:</th>
							<td>5466548</td>
						</tr>
						<tr>
							<th>Telf.:</th>
							<td>2352365</td>
						</tr>
						<tr>
							<th>Status:</th>
							<td>Activado</td>
						</tr>
					</table>
				</div>
		</div>
	</div>

	<div class="separator"></div>

	<div class="col-12">
		<div class="col-title">Estilos de botones</div>
		<div class="area">
			<table class="table bordered">
				<tr>
					<th>Color</th>
					<th colspan="3" class="align-center">Tamaño</th>
				</tr>
				<tr>
					<th></th>
					<th>.ss-button</th>
					<th>.s-button</th>
					<th>.m-button</th>
					<th>.l-button</th>
				</tr>
				<tr>
					<td>.light</td>
					<td><a href="" class="ss-button light">Boton</a></td>
					<td><a href="" class="s-button light">Boton</a></td>
					<td><a href="" class="m-button light">Boton</a></td>
					<td><a href="" class="l-button light">Boton</a></td>
				</tr>
				<tr>
					<td>.blue</td>
					<td><a href="" class="ss-button blue">Boton</a></td>
					<td><a href="" class="s-button blue">Boton</a></td>
					<td><a href="" class="m-button blue">Boton</a></td>
					<td><a href="" class="l-button blue">Boton</a></td>
				</tr>
				<tr>
					<td>.green</td>
					<td><a href="" class="ss-button green">Boton</a></td>
					<td><a href="" class="s-button green">Boton</a></td>
					<td><a href="" class="m-button green">Boton</a></td>
					<td><a href="" class="l-button green">Boton</a></td>
				</tr>
				<tr>
					<td>.red</td>
					<td><a href="" class="ss-button red">Boton</a></td>
					<td><a href="" class="s-button red">Boton</a></td>
					<td><a href="" class="m-button red">Boton</a></td>
					<td><a href="" class="l-button red">Boton</a></td>
				</tr>
				<tr>
					<td>.orange</td>
					<td><a href="" class="ss-button orange">Boton</a></td>
					<td><a href="" class="s-button orange">Boton</a></td>
					<td><a href="" class="m-button orange">Boton</a></td>
					<td><a href="" class="l-button orange">Boton</a></td>
				</tr>
				<tr>
					<td>.darkgray</td>
					<td><a href="" class="ss-button darkgray">Boton</a></td>
					<td><a href="" class="s-button darkgray">Boton</a></td>
					<td><a href="" class="m-button darkgray">Boton</a></td>
					<td><a href="" class="l-button darkgray">Boton</a></td>
				</tr>
				<tr>
					<td>.gray</td>
					<td><a href="" class="ss-button gray">Boton</a></td>
					<td><a href="" class="s-button gray">Boton</a></td>
					<td><a href="" class="m-button gray">Boton</a></td>
					<td><a href="" class="l-button gray">Boton</a></td>
				</tr>
				<tr>
					<td>.lightgray</td>
					<td><a href="" class="ss-button lightgray">Boton</a></td>
					<td><a href="" class="s-button lightgray">Boton</a></td>
					<td><a href="" class="m-button lightgray">Boton</a></td>
					<td><a href="" class="l-button lightgray">Boton</a></td>
				</tr>
				<tr>
					<th>Adicionales</th>
					<td colspan="4"></td>
				</tr>
				<tr>
					<td>.bold</td>
					<td>N/A</td>
					<td><a href="" class="s-button blue bold">Boton</a></td>
					<td><a href="" class="m-button blue bold">Boton</a></td>
					<td><a href="" class="l-button blue bold">Boton</a></td>
				</tr>
				<tr>
					<td>.loading</td>
					<td>N/A</td>
					<td><a href="" class="s-button blue loading inprogress">Boton</a></td>
					<td><a href="" class="m-button blue loading inprogress">Boton</a></td>
					<td><a href="" class="l-button blue loading inprogress">Boton</a></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>