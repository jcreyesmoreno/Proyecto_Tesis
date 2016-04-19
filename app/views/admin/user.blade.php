
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	{{ HTML::style('dist/login.css') }}
		<div class="container-main">
			<header>
	      		<div class="logo-derecho">
				</div>
				<div class="titulo">
    			<img src="../images/barra_tec.JPG" />
				<nav>
				<ul id="mainmenu" class="nav nav-tabs">
					<li><a href="/newtesis">Nueva Tesis</a>
					</li>
					<li><a href="/searchtesis">Buscar y/o eliminar tesis</a>
					</li>	
					<li><a href="/update">Actualizar Alumnos</a>
					</li>	
					<li><a href="/logout">Cerrar Sesión</a>
					</li>	
				</ul>	
				</nav>
				</div>
			</header>
			<article id="contenido">
				<h3 align="center" class="title">BIENVENIDO ESTA ES LA SESION DE ADMINISTRADOR SELECCIONA QUE ACCION DESEAS REALIZAR</h3>
				<br />

				<div class="instruccion">
					<dl>
	  					<dt>Nueva Tesis</dt>
	  					<dd>Agrega una nueva tesis llenando los campos con la información necesaria.</dd><br />
	  					<dt>Buscar y/o eliminar tesis</dt>
	  					<dd>Buscar una tesis por titulo, por autor, por carrera o por año.</dd>
	  					<br />
	  					<dt>Actualizar Alumnos</dt>
	  					<dd>Actualiza la base de datos de los alumnos con acceso al sistema</dd>
	  					<br />
	  					<dt>salir</dt>
	  					<dd>Salir de la sesión de administrador.</dd>
					</dl>
				</div>
			@yield('content')
			</article>
				<div id="footer">
				<p>Instituto Tecnológico de Minatitlán</p>
				<p>Blvd. Institutos Tecnológicos S/N Col. Buena Vista Norte C.P. 96848</p>
				<p>Telefono (922) 22 243 45 Minatitlán, Veracruz Llave</p>
				</div>	

