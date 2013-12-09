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
		<article id="contenido">
			<h3 align="center">BIENVENIDO PARA PODER CONTINUAR INGRESA TU USUARIO Y CONTRASEÑA</h3>
			<br />
			<div id="formulario1">
        	<form action="/userAdmin"  method="post">
    
            <label>Usuario:</label><br />
            <input type="text" name="correo" class="campo1" id="mail" />
            <br />

            <label>Contraseña:</label><br />
            <input type="password" name="passwd" class="campo1" id="passw" />

            <p align="center">
			<input type="submit" name="entrar" class="buscar" value="Iniciar sesión" />
			</p>
            
        </form>
    </div>
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

