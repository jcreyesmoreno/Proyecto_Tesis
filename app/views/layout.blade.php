<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="dist/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	{{ HTML::style('dist/login.css') }}
</head>
<body>
	<div class="container-main">
		<header>
			<div class="titulo">
    		<img src="../images/barra_tec.JPG" />
			</div>
		</header>

		<article id="contenido">
		@yield('content')
		</article>
	</div>	
	<div id="footer">
		<p>Instituto Tecnológico de Minatitlán</p>
		<p>Blvd. Institutos Tecnológicos S/N Col. Buena Vista Norte C.P. 96848</p>
		<p>Telefono (922) 22 243 45 Minatitlán, Veracruz Llave</p>
	</div>
</body>
</html>