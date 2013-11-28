@extends('layout')
@section('content')
<head>
	<script type="text/javascript" src= "../js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="../js/ajax_script.js"></script>
</head>
<h4 align="center">TU OPINION NOS INTERESA, SI TUVISTE ALGUN PROBLEMA EN TU BUSQUEDA POR FAVOR ENVIANOS UN CORREO</h4>
<div id="formulario">
	<form id="contacto" name="contacto" action="/enviar" method="post">
		<label>*Nombre:</label></br>
		<input type="text" id="name" name="nombre" class="campo" /></br>
		<div id="mensaje1" class="errores">Escribe tu nombre</div>

		<label>*Correo Electrónico:</label></br>
		<input type="email" id="email" name="correo" class="campo" /></br>
		<div id="mensaje2" class="errores">Escribe tu correo electronico</div>

		<label>*Mensaje:</label></br>
		<textarea id="tfmensaje" name="mensaje">
		</textarea>
		</br>
		<div id="mensaje3" class="errores">Escribe tu mensaje</div>
			
		<input type="submit" id="envio" value="Enviar" class="buscar" name="b1" />
		<input type="reset" value="Borrar" class="buscar" name="b2"/>

	</form>	
</div>



@endsection