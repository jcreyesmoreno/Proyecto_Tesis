@extends('layout')

@section('content')
	<h3 align="center">BIENVENIDO PARA PODER CONTINUAR INGRESA TU USUARIO Y CONTRASEÑA</h3>
	<br />
	<div class="form-user">
	@if(isset($Mensaje))
		<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert">&times;
		</button>
		<strong>¡Algo anda mal!</strong> el usuario o contraseña es incorrecto.
		</div>
	@endif			
	<form action="/login" method="post" name="flogin" id="flogin">
		<label>Numero de control</label>
		<input type="text" name="number" id="correo" class="form-control input-lg" placeholder="Introduce tu numero de control"> 
		<br />
		<label>Contraseña</label>
		<input type="password" name="passwd" id="passwd" class="form-control input-lg" placeholder="Contraseña"> 
		<!--<p class="text-center"><input type="submit" class="btn btn-success btn-lg btn-block" name="entrar" value="Ingresar">-->
        <br />
        <button type="text" class="btn btn-primary btn-lg" name="entrar">  
        <span class="glyphicon glyphicon-user"></span> Ingresar
         </button>
       	</form>
        <img id="tec" src="../images/tec1.png" />
    	</div>
		
@endsection


