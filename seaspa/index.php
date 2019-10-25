<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sea Spa - Massage and Therapy on board</title>
	<?php include 'includes/comunes.php'; ?>

</head>
<body>
	<div class="wrap centro">
		<?php include 'includes/head.php'; ?>

 		<div id="slides">
      <a href="#"><img src="images/slider1.jpg" alt=""></a>
      <a href="#"><img src="images/slider2.jpg" alt=""></a>
    </div>

    <div class="form-reserva clearfix">
    	<h2>Reservaciones</h2>
    	<form action="">
				<div class="col-65 pr5">
					<label>
						Seleccione su paquete
						<select name="" id="">
		    			<option value="">Paquete 1</option>
		    			<option value="">Paquete 2</option>
		    			<option value="">Paquete 3</option>
						</select>
					</label>
					
					<div class="col-2 pr5">
						<label>
							Nombre
							<input type="text">
						</label>
						<label>
							Correo electrónico
							<input type="text">
						</label>
					</div>

					<div class="col-2 pl5">
						<label>
							Apellido
							<input type="text">
						</label>
						<label>
							Teléfono
							<input type="text">
						</label>
					</div>	

				</div>

				<div class="col-35 pl5">
					aqui calendario
				</div>

				<button>Enviar</button>
    	</form>
    </div>

    <!-- columna iz -->
    <div class="col-65">
    	<div class="headline">
				<span>Artículos recientes</span>
			</div>

			<a href="#" class="article" style="background-image: url(images/img1.jpg);">
				<h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt.</h1>
			</a>

			<a href="#" class="article" style="background-image: url(images/img2.jpg);">
				<h1>Lorem ipsum dolor sit amet</h1>
			</a>

			<a href="#" class="article" style="background-image: url(images/img3.jpg);">
				<h1>Lorem ipsum dolor sit amet</h1>
			</a>

    </div>

    <!-- Columna der -->
    <div class="col-35 pl20 adds">
			<div class="headline">
				<span>Publicidad</span>
				<a href="#"><img src="http://placehold.it/288x288"></a>
			</div>
    </div>

	</div>


<div style="height: 100px;"></div>
<script src="js/lib/slider/jquery.slides.min.js"></script>
<script src="js/lib/slider/functions.js"></script>
</body>
</html>