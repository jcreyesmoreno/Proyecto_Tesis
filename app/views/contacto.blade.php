@extends('layout')
@section('content')
<h4 align="center">TU OPINION NOS INTERESA, SI TUVISTE ALGUN PROBLEMA EN TU BUSQUEDA POR FAVOR ENVIANOS UN CORREO</h4>
<div id="formulario">
	<form id="contacto" name="contacto" action="enviar.php" method="post">
		<p>Nombre:</br>
		<input type="text" name="nombre" class="campo"></br>
		<p>Correo Electrónico:</br>
		<input type="text" name="correo" class="campo"></br>
		<p>Mensaje:</br>
		<textarea id="tfMensaje" name="mensaje"></textarea>
			</br>
			
		<input type="submit" value="Enviar" class="buscar"name="b1">
		<input type="reset" value="Restablecer" class="buscar" name="b2">

	</form>	
@endsection