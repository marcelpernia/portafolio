<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php include 'includes/comunes.php'; ?>
	<title>Noble Air Charter</title>

	<script type="text/javascript" src="js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="js/fancybox/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script>

			$('.fancybox').fancybox({
				// prevEffect : 'none',
				// nextEffect : 'none',

				// closeBtn  : false,
				// arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});
	</script>

</head>
<body class="home">

	<?php include 'includes/head.php'; ?>

	<div class="contenedor slider">
		<!-- <img src="images/logo_white.png" alt="Logotipo Noble Air Charter" class="logo op"> -->

	<div class="hgroup op">
		<h1>Your flight</h1>
		<h2>is our destination</h2>
	</div>
		<img class="svg" src="images/top-1600.svg">
	</div>

	<div id="company" class="contenedor seccion presentacion">
		<h1 class="encabezado">FLORIDA AIR CHARTERS<br>AND PRIVATE FLIGHTS</h1>
		<p>Noble Air Charter offers full business-day and overnight trips to any city in Florida, the Keys, or anywhere throughout the Bahamas. Competitive pricing and outstanding service are the hallmarks of this private charter company.</p>

		<p class="destacado">
			<i class="icon-award"></i>
			Noble Air Charter is a specialized provider of private air charter service, located at the Opa Locka Airport in Miami, Florida. Noble Air Charter provides private air charters throughout Florida, the Keys and the Bahamas. Private air travel with Noble Air Charter provides 5 star business and vacation charters operating to the highest safety standards while providing the best in air travel service. Our Captains are qualified Airline Transport Pilots.
		</p>
	</div>


	<div class="contenedor seccion beneficios">
		<h1 class="encabezado">With Noble Air Charter</h1>
		<div class="wrap">
			<div class="item">
				<i class="icon-plane"></i>
				<p>You avoid the hassle of flying out of major metropolitan airports</p>
			</div>
			<div class="item">
				<i class="icon-clock"></i>
				<p>You enjoy not having to arrive at the gate over an hour early and no long lines</p>
			</div>
			<div class="item">
				<i class="icon-shield"></i>
				<p>You enjoy no flight delays or security risks or problems</p>
			</div>
			<div class="item">
				<i class="icon-man"></i>
				<p>You have total flexibility so you can maximize the use of your valuable time</p>
			</div>
			<div class="item">
				<i class="icon-holiday"></i>
				<p>Paradise Island and Grand Bahama are less than an hour away</p>
			</div>
			<div class="item">
				<i class="icon-location"></i>
				<p>You can enjoy trips anywhere you desire</p>
			</div>
			<div class="item">
				<i class="icon-pet"></i>
				<p>Pets welcomed</p>
			</div>
			<div class="item">
				<i class="icon-percent"></i>
				<p>Discounted block time packages are available</p>
			</div>
		</div>
		<div class="contenedor tcenter">
			<a href="charter-quote.php">Request a Quote Now</a>
		</div>
	</div>

	<div id="departures" class="contenedor seccion departures">
		<h1 class="encabezado"><img clss="orion" src="images/logo_orion_jet_center.png" alt="Logo Orion Jet Center"></h1>
		<div class="wrap">
			<div class="col-2 pr15">
				<p>Orion Jet Center is located only 10 minutes from Sun Life Stadium (home of the Miami Dolphins and the Florida Marlins), 35 minutes from Downtown Miami, 30 minutes from Miami Beach and only 20 minutes from Miami International Airport.</p>
				<p>Orion Jet Center features no landing fees and quick and easy access. The airport offers full FBO service, a wide range of aircraft repair and maintenance services, including airframe, powerplant and avionics repair, and US Custom Service on the airfield.</p>
				<p>For information on Parking or other airport related questions, <a href="contact-us.php">Contact us</a>.</p>
				<p>We also offer car or SUV services from either Miami Intl. Airport or Fort Lauderdale Airport. Call for more information (786) 251-4345.</p>
				<p>Our fleet departs from Orion Jet Center FBO with free parking. Please be inside lobby facility 30 minutes before your scheduled departure time.</p>
			</div>
			<div class="col-2 pl15">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3588.762897815585!2d-80.2716825073749!3d25.91016383775907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9aff95d2217cd%3A0x5bbd8b3c6c463b7!2sOrion+Jet+Center!5e0!3m2!1ses!2sve!4v1448885635171" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
				
				<a class="fancybox" href="images/orion-jet-center1.jpg" data-fancybox-group="gallery" title=""><img src="images/orion-jet-center1-min.jpg" alt="" /></a>
				<a class="fancybox" href="images/orion-jet-center2.jpg" data-fancybox-group="gallery" title=""><img src="images/orion-jet-center2-min.jpg" alt="" /></a>
				<a class="fancybox" href="images/orion-jet-center3.jpg" data-fancybox-group="gallery" title=""><img src="images/orion-jet-center3-min.jpg" alt="" /></a>
				<a class="fancybox" href="images/orion-jet-center4.jpg" data-fancybox-group="gallery" title=""><img src="images/orion-jet-center4-min.jpg" alt="" /></a>
			</div>
		</div>
	</div>



	<div id="fleet" class="contenedor seccion flota">
		<h1 class="encabezado">our fleet</h1>
		<div class="wrap galeria">

			<a class="fancybox" data-fancybox-group="gallery2" href="images/g1.JPG"><img src="images/m1.jpg"/></a>
			<a class="fancybox" data-fancybox-group="gallery2" href="images/g2.jpg"><img src="images/m2.jpg"/></a>
			<a class="fancybox" data-fancybox-group="gallery2" href="images/g3.jpg"><img src="images/m3.jpg"/></a>
			<a class="fancybox" data-fancybox-group="gallery2" href="images/g4.jpg"><img src="images/m4.jpg"/></a>
			<a class="fancybox" data-fancybox-group="gallery2" href="images/g5.jpg"><img src="images/m5.jpg"/></a>
			<a class="fancybox" data-fancybox-group="gallery2" href="images/g6.jpg"><img src="images/m6.jpg"/></a>
			<a class="fancybox" data-fancybox-group="gallery2" href="images/g7.jpg"><img src="images/m7.jpg"/></a>
			<a class="fancybox" data-fancybox-group="gallery2" href="images/g8.jpg"><img src="images/m8.jpg"/></a>
			<a class="fancybox" data-fancybox-group="gallery2" href="images/g9.jpg"><img src="images/m9.jpg"/></a>
			
			<div style="display: none;">
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g10.jpg"><img src="images/m10.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g11.jpg"><img src="images/m11.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g12.jpg"><img src="images/m12.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g13.jpg"><img src="images/m13.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g14.jpg"><img src="images/m14.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g15.jpg"><img src="images/m15.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g16.jpg"><img src="images/m16.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g17.jpg"><img src="images/m17.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g18.jpg"><img src="images/m18.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g19.jpg"><img src="images/m19.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g20.jpg"><img src="images/m20.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g21.jpg"><img src="images/m21.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g22.jpg"><img src="images/m22.jpg"/></a>
				<a class="fancybox" data-fancybox-group="gallery2" href="images/g23.jpg"><img src="images/m23.jpg"/></a>
			</div>
				
		</div>
	</div>

	<?php include 'includes/resources.php'; ?>

	<div class="contenedor seccion resources">
		<h1 class="encabezado">Flight Charter Resources</h1>
		<div class="wrap">
			<div class="col-2">
				<div>
					<a id="box-1" href="javascript:void(0);">Charter Flights to Bimini</a>
					<a id="box-2" href="javascript:void(0);">Florida Charter Flights</a>
					<a id="box-3" href="javascript:void(0);">Bahamas Charter Flights</a>
					<a id="box-4" href="javascript:void(0);">Private Flights to the Bahamas</a>
					<a id="box-5" href="javascript:void(0);">Bahamas Air Charters</a>
					<a id="box-6" href="javascript:void(0);">Florida Air Charter</a>
					<a id="box-7" href="javascript:void(0);">Key West Charters</a>
				</div>
			</div>
			<div class="col-2">
				<div>
					<a id="box-8" href="javascript:void(0);">Marsh Harbour Flights</a>
					<a id="box-9" href="javascript:void(0);">Private Flights</a>
					<a id="box-10" href="javascript:void(0);">Private Flights Florida</a>
					<a id="box-11" href="javascript:void(0);">Charter Flights Florida</a>
					<a id="box-12" href="javascript:void(0);">Tallahassee Charter Flights</a>
					<a id="box-13" href="javascript:void(0);">Miami to Gainesville Flight</a>
					<a id="box-14" href="javascript:void(0);">Private Flights to Key West</a>
				</div>
			</div>
		</div>
	</div>


	<?php include 'includes/footer.php'; ?>

	<script>
		$(document).ready(function(){
			$("area[rel^='prettyPhoto']").prettyPhoto();
				$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
		
				$("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
					custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
					changepicturecallback: function(){ initialize(); }
				});

				$("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
					custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
					changepicturecallback: function(){ _bsap.exec(); }
				});

		});
	</script>
</body>
</html>