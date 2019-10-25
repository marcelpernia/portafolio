<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php include 'includes/comunes.php'; ?>
	<?php include 'includes/captcha.php'; ?>
	<title>Charter quote</title>

	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
	
</head>
<body>
	<?php include 'includes/head-in.php'; ?>


<div class="contenedor quote">
	
	<div class="col-65">
		<h1 class="encabezado">Charter Quote</h1>

		<?php if (isset($_GET['enviado'])) { ?>
			<div class="notificacion">
				<h2>Thank you!</h2>
				<p>We have received your information and a representative will get back with you shortly.</p>
				<p>If you would like immediate assistance, please call us directly at (786) 251-4345.</p>
			</div>
			<a href="index.php" class="boton">Back to Home</a>
		<?php } else { ?>

		<form action="" method="post" class="formulario">
			<div class="contenedor tcenter">
				<label><input type="radio" name="option" id="round" checkedvalue="Round Trip">Round Trip</label>
				<label style="margin-left: 20px;"><input id="oneway" type="radio" name="option" value="One Way">One Way</label>
			</div>

			<div class="col-2 pr15">
				<label><input name="first_name" type="text" placeholder="First name" autofocus data-validation="required"></label>
				<label><input name="email" type="text" placeholder="E-mail" data-validation="email required"></label>
				<label><input name="departure" id="date_timepicker_start" type="text" placeholder="Departure Date" data-validation="required" readonly></label>
				<label><input name="from" type="text" placeholder="Departing From (Location)" data-validation="required"></label>
				<label>
					<select name="passagers" data-validation="required">
						<option value="">Total Passengers</option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
						<option>6</option>
						<option>7</option>
						<option>8</option>
						<option>9</option>
						<option>10</option>
						<option>11</option>
						<option>12</option>
					</select>
				</label>
			</div>
			<div class="col-2 pl15">
				<label><input name="last_name" type="text" placeholder="Last name" data-validation="required"></label>
				<label><input name="phone" type="text" placeholder="Phone Number" data-validation="required"></label>
				<label><input name="return" id="date_timepicker_end" type="text" placeholder="Return Date" data-validation="required" readonly></label>
				<label><input name="to" type="text" placeholder="Traveling to (Location)" data-validation="required"></label>
    		<label><input type="text" name="captcha" data-validation="spamcheck" placeholder="<?php echo $a.' + '.$b; ?> ? (Security question)" data-validation-captcha="<?php echo $c; ?>"></label>
			</div>

			<div class="contenedor tright">
				<label><textarea name="message" placeholder="Additional Information"></textarea></label>
				<button>Send</button>
			</div>

		</form>	
		<?php } ?>
	</div>


	<div class="col-35 bgimg bgquote">
		
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

<script src="js/jquery.datetimepicker.full.js"></script>
<script>

	$('#date_timepicker_start').datetimepicker({
	  onShow:function( ct ){
	   this.setOptions({
	    maxDate:$('#date_timepicker_end').val()?$('#date_timepicker_end').val():false
	   })
	  },
		 allowTimes:[
			 '00:00', '00:30',
			 '01:00', '01:30',
			 '02:00', '02:30',
			 '03:00', '03:30',
			 '04:00', '04:30',
			 '05:00', '05:30',
			 '06:00', '06:30',
			 '07:00', '07:30',
			 '08:00', '08:30',
			 '09:00', '09:30',
			 '10:00', '10:30',
			 '11:00', '11:30',
			 '12:00', '12:30',
			 '13:00', '13:30',
			 '14:00', '14:30',
			 '15:00', '15:30',
			 '16:00', '16:30',
			 '17:00', '17:30',
			 '18:00', '18:30',
			 '19:00', '19:30',
			 '20:00', '20:30',
			 '21:00', '21:30',
			 '22:00', '22:30',
			 '23:00', '23:30'
			 ],
	  minDate:'0',
	  defaultTime:'00:00'
	 });
	 $('#date_timepicker_end').datetimepicker({
	  onShow:function( ct ){
	   this.setOptions({
	    minDate:$('#date_timepicker_start').val()?$('#date_timepicker_start').val():false
	   })
	  },
		 allowTimes:[
			 '00:00', '00:30',
			 '01:00', '01:30',
			 '02:00', '02:30',
			 '03:00', '03:30',
			 '04:00', '04:30',
			 '05:00', '05:30',
			 '06:00', '06:30',
			 '07:00', '07:30',
			 '08:00', '08:30',
			 '09:00', '09:30',
			 '10:00', '10:30',
			 '11:00', '11:30',
			 '12:00', '12:30',
			 '13:00', '13:30',
			 '14:00', '14:30',
			 '15:00', '15:30',
			 '16:00', '16:30',
			 '17:00', '17:30',
			 '18:00', '18:30',
			 '19:00', '19:30',
			 '20:00', '20:30',
			 '21:00', '21:30',
			 '22:00', '22:30',
			 '23:00', '23:30'
			 ],
			 minDate:'0',
	  	 defaultTime:'00:00'
	 });
</script>
</body>
</html>