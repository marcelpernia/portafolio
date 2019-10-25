<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php include 'includes/comunes.php'; ?>
	<?php include 'includes/captcha.php'; ?>
	<title>Contact us</title>
	
</head>
<body>


	<?php include 'includes/head-in.php'; ?>


<div class="contenedor quote">
	
	<div class="col-65">
		<h1 class="encabezado">Contact us</h1>

		<?php if (isset($_GET['enviado'])) { ?>
			<div class="notificacion">
				<h2>Thank you!</h2>
				<p>We have received your information and a representative will get back with you shortly.</p>
				<p>If you would like immediate assistance, please call us directly at (786) 251-4345.</p>
			</div>
			<a href="index.php" class="boton">Back to Home</a>
		<?php } else { ?>

		<form action="" method="post" class="formulario">

			<div class="col-2 pr15">
				<label><input name="name" type="text" placeholder="Name" autofocus data-validation="required"></label>
				<label><input name="email" type="text" placeholder="E-mail" data-validation="email required"></label>
				
			</div>
			<div class="col-2 pl15">
				<label><input name="phone" type="text" placeholder="Phone Number" data-validation="required number"></label>
    		<label><input type="text" name="captcha" data-validation="spamcheck" placeholder="<?php echo $a.' + '.$b; ?> ? (Security question)" data-validation-captcha="<?php echo $c; ?>"></label>
			</div>

			<div class="contenedor tright">
				<label><textarea name="message" placeholder="Questions / Comments" data-validation="required"></textarea></label>
				<button>Send</button>
			</div>

		</form>	
		<?php } ?>
	</div>


	<div class="col-35 bgimg bgcontact">
		
	</div>

	
</div>

	<?php include 'includes/footer.php'; ?>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.1/jquery.form-validator.min.js"></script>
<script> 
  $.validate({
  	modules : 'security',
    validateOnBlur : false,
    scrollToTopOnError : false
  }); 
</script>

</body>
</html>