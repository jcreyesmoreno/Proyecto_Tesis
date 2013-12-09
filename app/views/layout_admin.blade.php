<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	{{ HTML::style('css/style.css') }}
</head>
<body>
	<div class="container-main">
		<header>
	      <div class="logo-derecho">
				</div>
			<div class="titulo">
    		<h2 align="center" class="title-p">SISTEMA DE BUSQUEDA Y CONSULTA DE TESIS ONLINE</h2>	
		<nav>
			<ul id="mainmenu">
				<li><a href="/newtesis">Nueva tesis</a>
				</li>
				<li><a href="/searchtesis">Buscar</a>
				</li>	
				<li><a href="/change">Cambiar contraseña</a>
				</li>
				<li><a href="/logout">Salir</a>
				</li>	
			</ul>	
		</nav>
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

