@extends('layout')

@section('content')
	<h4 align="center">INTRUDUCE TU USUARIO Y CONTRASEÑA</h4>
	<div id="formulario1">
            <form action="/userAdmin"  method="post">
			<label>Usuario:</label></br>
			<p align="center">
            <input type="text" name="correo" class="campo1"></br>
            </p>
            
			<label>Contraseña:</label></br>
			<p align="center">
            <input type="password" name="passwd" class="campo1"></p>
			<p align="center">
			<input type="submit" name="entrar" class="buscar" value="Entrar" />
			</p>
            	</form>
            </div>
            
    

@endsection
