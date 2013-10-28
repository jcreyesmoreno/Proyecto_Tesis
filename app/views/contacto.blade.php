@extends('layout')
@section('content')
<h4 align="center">TU OPINION NOS INTERESA, SI TUVISTE ALGUN PROBLEMA EN TU BUSQUEDA POR FAVOR ENVIANOS UN CORREO</h4>
<div class="formulario">
	<form id="contacto" name="contacto" action="enviar.php" method="post">
		<p>Nombre:</br>
		<input type="text" name="nombre" size="35"></br>
		<p>Correo Electrónico:</br>
		<input type="text" name="correo" size="35"></br>
		<p>Mensaje:</br>
		<textarea id="tfMensaje" cols="35" rows="10" name="mensaje"></textarea>
			</br>
			
		<input type="submit" value="Enviar" name="b1">
		<input type="reset" value="Restablecer" name="b2">

	</form>	
@endsection