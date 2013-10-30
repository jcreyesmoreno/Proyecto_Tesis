@extends('layout')

@section('content')
	<h4 align="center">INTRUDUCE TU USUARIO Y CONTRASEÑA</h4>
	<div id="formulario1">
            <form action="/userAdmin"  method="post">
			<p>Usuario:</br>
                  <input type="text" name="correo" class="campo1"></br>
			<p>Contraseña:</br>
                  <input type="password" name="passwd" class="campo1"></br></br>
			<p align="center">
			<input type="submit" name="entrar" class="buscar" value="Entrar" /><br>
			</p>
            	</form>
            </div>
            
    

@endsection
