@extends('layout')

@section('content')
    <h4 align="center">INGRESA TU USUARIO Y CONTRASEÑA</h4>
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
@endsection
