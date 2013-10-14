@extends('layout')
@section('content')
<h4 align="center">TU OPINION NOS INTERESA, SI TUVISTE ALGUN PROBLEMA EN TU BUSQUEDA POR FAVOR ENVIANOS UN CORREO</h4>
<div class="formulario">
	<form id="contacto" name="contacto" action="enviar.php" method="post">
		<label>Nombre:</label>
		<input type="text" name="nombre" size="20">
			</br>
			</br>

		<label>Correo Electrónico:</label>
		<input type="text" name="correo" size="20">
			</br>
			</br>
		<label>Mensaje:</label>
			</br>
			</br>
		<textarea id="tfMensaje" cols="30" rows="10" name="mensaje"></textarea>
			</br>
			
		<input type="submit" value="Enviar" name="b1">
		<input type="reset" value="Restablecer" name="b2">

	</form>	
@endsection