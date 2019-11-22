<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>marcelpernia.website</title>
	<link rel="stylesheet" href="css/style.css?v=2">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body class="bg-gray">

	<div id="app">
		<div class="hero" style="background-image: url(img/workspace.jpg);">
			<div class="hero__caption">
				<h1 v-html="heroTitle"></h1>
				<ul class="hero__contact">
					<li>{{ email }}</li>
					<li>{{ phone }}</li>
					<li><a target="_blank" :href="github">GitHub.</a></li>
				</ul>
			</div>
		</div>
	
		<div class="works">
			<div class="wrap">
			  <div v-for="work in works" class="work">
					<a :href="work.url" target="_blank" class="work__cover">
						<img :src="work.img + '?234nddsf3'" :alt="work.title">
					</a>
					<div class="work__info">
						<div class="work__info__type" v-html="work.type"></div>
						<div class="work__info__title" v-html="work.title"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="text-c mt50">
			<a target="_blank" class="btn" href="https://drive.google.com/drive/folders/1OqhX-t-5N0RNSCLxIvEkrP6nS17Fgdxo?usp=sharing">Otros proyectos aquí</a>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
	<script>
		var app = new Vue({
		  el: '#app',
		  data: {
		  	heroTitle: 'Portafolio',
		  	email: 'marcelpm1987@gmail.com',
		  	phone: '+51 912 374 724',
		  	github: 'https://github.com/marcelpernia',
		    works: [
				{ 
					url: 'charter',
					img: 'img/charter.jpg',
					type: 'Diseño y Maquetación',
					title: 'Charter'
				},
				{ 
					url: 'design/tupuntomovil',
					img: 'img/tupuntomovil.jpg',
					type: 'Diseño web',
					title: 'Tu punto Móvil'
				},
				{ 
					url: 'design/bloomty',
					img: 'img/bloomty.jpg',
					type: 'Diseño web',
					title: 'Bloomty'
				},
				{ 
					url: 'design/rv-admin',
					img: 'img/rv-admin.jpg',
					type: 'Diseño y maquetación',
					title: 'Custom UI'
				},
				{ 
					url: 'design/parl',
					img: 'img/parl.jpg',
					type: 'Diseño web y maquetación',
					title: 'Sitio web corporativo'
				},
				{ 
					url: 'design/microsite',
					img: 'img/microsite.jpg',
					type: 'Diseño web',
					title: 'Microsite corporativo'
				},
				{ 
					url: 'design/happyshop-landing',
					img: 'img/happyshop-landing.jpg',
					type: 'Diseño web',
					title: 'HappyShop Landing'
				},
				{ 
					url: 'happyshop-cupones',
					img: 'img/happyshop-cupones.jpg',
					type: 'Diseño web y maquetación',
					title: 'HappyShop Coupons'
				},
				{ 
					url: 'design/lizard',
					img: 'img/lizard.jpg',
					type: 'Diseño y maquetación',
					title: 'Interface Lizard'
				},
				{ 
					url: 'login-1/',
					img: 'img/login-1.jpg',
					type: 'Diseño y Maquetación',
					title: 'Login form #1'
				},
				{ 
					url: 'ma-help',
					img: 'img/blog-soporte.jpg',
					type: 'Diseño y Maquetación',
					title: 'Blog de soporte'
				},
				// { 
				// 	url: 'mesabiertaStaff',
				// 	img: 'img/interface-intranet.jpg',
				// 	type: 'Diseño y Maquetación',
				// 	title: 'Layout para interface'
				// },
				{ 
					url: 'http://www.1000frases.com',
					img: 'img/1000frases.jpg',
					type: 'Diseño, maquetación y desarrollo en Wordpress',
					title: '1000frases.com / Proyecto personal'
				},
				{ 
					url: 'design/redecoro',
					img: 'img/redecoro.jpg',
					type: 'Diseño web',
					title: 'Redecoro'
				},
				{ 
					url: 'design/modals',
					img: 'img/modals.jpg',
					type: 'UI Design',
					title: 'Modals'
				},
				// { 
				// 	url: 'design/agroup',
				// 	img: 'img/agroup.jpg',
				// 	type: 'Diseño web',
				// 	title: 'Agroup'
				// },
				{ 
					url: 'design/hosping',
					img: 'img/hosping.jpg',
					type: 'Diseño web',
					title: 'Calculadora ROI'
				},
				{ 
					url: 'design/testimonio',
					img: 'img/testimonio.jpg',
					type: 'Diseño web',
					title: 'Tienda online libros'
				},
				{ 
					url: 'happyshop-admin',
					img: 'img/happyshop-admin.jpg',
					type: 'Diseño web y maquetación',
					title: 'HappyShop Admin'
				},
				{ 
					url: 'design/bayshore',
					img: 'img/bayshore.jpg',
					type: 'Diseño web',
					title: 'Bayshore'
				},
				{ 
					url: 'starwars-form',
					img: 'img/login-form-2.jpg',
					type: 'Maquetación. (Design by <a target="_blank" href="https://www.behance.net/emperatrizog">@emperatrizog</a>)',
					title: 'Star Wars concept form'
				}
				// { 
				// 	url: 'seaspa',
				// 	img: 'img/seaspa.jpg',
				// 	type: 'Diseño y Maquetación. (En desarrollo)',
				// 	title: 'SeaSpa'
				// }
		    ]
		  }
		})
	</script>
</body>
</html>