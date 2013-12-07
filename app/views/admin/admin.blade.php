@extends('layout')

@section('content')
<html>
    <head>
        <script type="text/javascript" src="../js/alertify.js"></script>
        <link rel="stylesheet" href="../css/alertify.core.css" />
        <link rel="stylesheet" href="../css//alertify.default.css" />
        <script>
        function error(){
                alertify.error("Usuario o constraseña incorrecto/a."); 
                return false; 
            }
        </script>
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
