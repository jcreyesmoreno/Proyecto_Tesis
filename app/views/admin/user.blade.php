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
    	</div>	
		</header>
		<nav>
			<ul id="mainmenu">
				<li><a href="/newtesis">Nueva tesis</a>
				</li>
				<li><a href="deletetesis">Eliminar tesis</a>
				</li>
				<li><a href="searchtesis">Buscar</a>
				</li>	
				<li><a href="/logout">salir</a>
				</li>	
			</ul>	
		</nav>
		<article id="contenido">
			@yield('content')
		</article>
	</div>	
</body>
</html>

