@extends('layout')

@section('content')
</br>
</br>
	<div class="formulario1">
            <form action="/userAdmin" method="post">
			<p>Usuario:</br>
                  <input type="text" name="correo" size="30"></br>
			<p>Contraseña:</br>
                  <input type="password" name="passwd" size="30"></br></br>
			<p align="center">
			<input type="submit" name="entrar" value="Entrar" /><br>
			</p>
            	</form>
            </div>
            
    

@endsection
