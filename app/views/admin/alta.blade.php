@extends('layout_admin')

@section('content')
<html lang="es">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-escale=1.0">
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
  {{ HTML::style('dist/login.css') }}
  </head>
  <body>
    <h4 align="center">INGRESA LOS DATOS DE LA NUEVA TESIS</h4> <br />
    <div class="form-group">
      <form enctype="multipart/form-data" action="/thesis" method="post">
      <label>Titulo</label>
      <input type="text" class="form-control input-lg" name="nombre" id="titulo_tesis" placeholder="Introduce el titulo de la tesis">
      
      <label>Autor</label>
      <input type="text" class="form-control input-lg" name="autor" id="autor" placeholder="Introduce el nombre del autor">
    
    <label>Carrera</label>
    <select class="form-control input-lg" name="carrera">
      <option selected>--- Elige una carrera ---</option>
      <option value="Ambiental">ING. AMBIENTAL</option>
      <option value="Electromecanica">ING. ELECTROMECANICA</option>
      <option value="Electronica">ING. ELECTRONICA</option>
      <option value="Industrial">ING. INDUSTRIAL</option>
      <option value="Gestion">ING. EN GESTION EMPRESARIAL</option>
      <option value="Quimica">ING. QUIMICA</option>
      <option value="Sistemas">ING. EN SISTEMAS COMPUTACIONALES</option>
      <option value="Administracion">LIC. EN ADMINISTRACION</option>
    </select>
    <label>Año</label>
      <select class="form-control input-lg" name="year">
        <option selected>--- Elige un año ---</option>
        <option value="1990">1990</option>
        <option value="1991">1991</option>
        <option value="1992">1992</option>
        <option value="1993">1993</option>
        <option value="1994">1994</option>
        <option value="1995">1995</option>
        <option value="1996">1996</option>
        <option value="1997">1997</option>
        <option value="1998">1998</option>
        <option value="1999">1999</option>
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
    </select>
  

        <br />
        <label>Seleccionar Indice(PDF)
        <input type="file" id="Seleccionar Indice"></label>
        <br />
        <br />
        <label>Seleccionar Prorrogo(PDF)
        <input type="file" id="Seleccionar Prorrogo"></label>
        <br />
        <br />
        <label>Seleccionar Tesis(PDF)
        <input type="file" id="Seleccionar Tesis"></label>
        <br />
        <br />
        <button type="text" class="btn btn-success btn-lg" name="entrar">  
        <span class="glyphicon glyphicon-book"></span> Agregar tesis
        </button>

    <!--<input type="submit" class="btn btn-success btn-lg" name="entrar" value="Agregar Tesis">-->
    </form>
    </div>
  </body>
</html>
@endsection
