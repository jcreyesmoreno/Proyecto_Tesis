@extends('layout')

@section('content')
            </br>
            </br>
			<div class="formulario1" align="center">
             	<form action="/userAdmin" method="post">
			<br>Usuario: <input type="text" name="correo" size="20"></br>
			<br>Contraseña: <input type="password" name="passwd" size="20">
            </br>
            </br>

			<input type="submit" name="entrar" value="Entrar" />
			
			<br>
            	</form>
            </div>
            </br>
            </br>
            </br>
            </br>
    

@endsection
