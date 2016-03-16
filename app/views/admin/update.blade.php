@extends('layout_admin')

@section('content')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-escale=1.0">
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
  {{ HTML::script('js/adduser.js') }}
  {{ HTML::style('dist/login.css') }}
    <h4 align="center">SELECCIONA EL EXCEL PARA ACTUALIZAR ALUMNOS</h4>
      <br />
    <div class="form-group">
        <form enctype="multipart/form-data" action="/update_excel" method="post">
          <label>Seleccionar lista de alumnos(Xls)
          <input type="file" id="Seleccionar_excel" name="excel" required="required"></label>
          <br />
          <br />
          <button type="text" class="btn btn-success btn-lg" name="entrar">  
          <span class="glyphicon glyphicon-book"></span> Agregar Excel
          </button>
          <br />
          <br />
        </form>
          <label>Agregar Alumno Manualmente:</label>
          <br />
          <form id="add_user">
          <label>Numero de control:</label>
          <input type="text" class="form-control input-lg" name="numcontrol" id="num_control" required="required" placeholder="Introduce el numero de control">
        
          <label>Contraseña:</label>
          <input type="password" class="form-control input-lg" name="passwuser" id="passwuser" required="required" placeholder="Introduce la contraseña ">
          
          <label value="type_user">tipo de usuario:</label>
          <select class="form-control input-lg" name="typeuser" id="permissions" required="required">
            <option value="user">Usuario</option>
            <option value="admin">Administrador</option>
          </select>

          <label>Nombres(s):</label>
          <input type="text" class="form-control input-lg" name="nameuser" id="first_name" required="required" placeholder="Introduce el nombre(s)">

          <label>Apellidos(s):</label>
          <input type="text" class="form-control input-lg" name="lastname" id="last_name" required="required" placeholder="Introduce los Apellidos">
          <br />

          <button type="submit" class="btn btn-success btn-lg" name="entrar">  
          <span class="glyphicon glyphicon-book"></span> Agregar Alumno
          </button>
        </form>
      </div>
@endsection

      