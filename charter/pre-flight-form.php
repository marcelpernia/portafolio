<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php include 'includes/comunes.php'; ?>
	<?php include 'includes/captcha.php'; ?>
	<title>Pre-flight Form</title>
	
</head>
<body>


	<?php include 'includes/head-in.php'; ?>


<div class="contenedor quote">
	
	<div class="col-65">
		<h1 class="encabezado">Pre-flight Form</h1>

	<?php if (isset($_GET['enviado'])) { ?>
		<div class="notificacion">
			<h2>Thank You!</h2>
			<p> We have received your information and will place it on file for your flight. As an extra step of precaution, we reccommend that you follow your submission with a call to our office to verify our receipt of your information.</p>
		</div>
		<a href="index.php" class="boton">Back to Home</a>
	<?php } else { ?>


		<form action="" method="post" class="formulario">

			<div class="col-2 pr15">
				<label><input style="margin-bottom: 31px;" name="first_name" type="text" placeholder="First name" autofocus data-validation="required"></label>
				<label><input type="radio" name="gender" value="male">Male</label>
				<label style="margin-left: 20px;"><input type="radio" name="gender" value="female">Female</label>
				<label><input name="weight" type="text" placeholder="Weight" data-validation="required"></label>
				<label><input name="citizenship" type="text" placeholder="Citizenship" data-validation="required"></label>
				<label><input name="residence" type="text" placeholder="Residence Card #"></label>
				<label><input name="rc_exp" type="text" placeholder="Exp. Date RC"></label>
				<label><input name="phone" type="text" placeholder="Phone" data-validation="number required"></label>

			</div>
			<div class="col-2 pl15">
				<label><input name="last_name" type="text" placeholder="Last Name"></label>
				<label><input name="dob" type="text" placeholder="D.O.B." data-validation="required"></label>
				<label><input name="countryresidence" type="text" placeholder="Country of Residence" data-validation="required"></label>
				<label><input name="passport" type="text" placeholder="Passport #"></label>
				<label><input name="pp_exp" type="text" placeholder="Exp. Date PP"></label><label><input name="email" type="text" placeholder="E-mail" data-validation="email required"></label>
			   		
			</div>
			
			<div class="contenedor" style="padding-top: 30px;">
				<fieldset>
					<legend>Address</legend>
					<label><textarea name="street_address" placeholder="Street Address" data-validation="required"></textarea></label>
				
					<div class="col-2 pr15">
						<label><input name="city" type="text" placeholder="City" data-validation="required"></label>
						<label><input name="postal" type="text" placeholder="Postal / Zip Code" data-validation="required"></label>
					</div>
				
					<div class="col-2 pl15">
						<label><input name="state" type="text" placeholder="State / Province" data-validation="required">	</label>
						<label><input autocomplete="off" name="country" type="text" placeholder="Country" data-validation="country"></label>
					</div>
				
				</fieldset>
			</div>
			<div class="contenedor">
				<label>	<label><input type="text" name="captcha" data-validation="spamcheck" placeholder="<?php echo $a.' + '.$b; ?> ? (Security question)" data-validation-captcha="<?php echo $c; ?>"></label></label>
			</div>

			<div class="contenedor tright">
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
  	modules : 'security, location',
  	onModulesLoaded : function() {
	    $('input[name="country"]').suggestCountry();
  	},
    validateOnBlur : false,
    scrollToTopOnError : false
  }); 
</script>

</body>
</html>