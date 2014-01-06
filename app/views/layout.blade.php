<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
	<link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	{{ HTML::style('dist/login.css') }}
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
		<div class="form-user">	
			<form action="/userAdmin" method="post" name="flogin" id="flogin">
				<label>Numero de control</label>
				<input type="text" name="correo" id="correo" class="form-control input-lg" placeholder="Introduce tu numero de control"> 
				<br />
				<label>Contraseña</label>
				<input type="password" name="passwd" id="passwd" class="form-control input-lg" placeholder="Contraseña"> 
				<!--<p class="text-center"><input type="submit" class="btn btn-success btn-lg btn-block" name="entrar" value="Ingresar">-->
        		<br />
        		<button type="text" class="btn btn-primary btn-lg" name="entrar">  
            	<span class="glyphicon glyphicon-user"></span> Ingresar
          		</button>
        	</form>
    	</div>


    	<!--<img id="tec" src="../imagestec1.png" />-->
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

