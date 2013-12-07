@extends('layout_admin')

@section('content')
<html lang="es">
  <head>
  <meta charset="utf-8">
  <title></title>
  </head>
    <body>
    <h4 align="center">SELECCIONA CUALQUIER METODO DE BUSQUEDA</h4>
      <div id="formulario4">
        <form name="consulta" action="/search" method="post">
        <label>Título:</label><br />
        <input type="text" name="nombre" class="campo4">
        <br />
        <label>Autor:</label><br />
        <input type="text" name="autor" class="campo4">
        <br />
          <label>Carrera:</label> <br />
          <select name="carrera" id="opcion">
          <option selected>--- Elige una carrera ---</option>
          <option value="AMBIENTAL">ING. AMBIENTAL</option>
          <option value="ELECTROMECANICA">ING. ELECTROMECANICA</option>
          <option value="ELECTRONICA">ING. ELECTRONICA</option>
          <option value="INDUSTRIAL">ING. INDUSTRIAL</option>
          <option value="GESTION">ING. EN GESTION EMPRESARIAL</option>
          <option value="QUIMICA">ING. QUIMICA</option>
          <option value="SISTEMAS">ING. EN SISTEMAS COMPUTACIONALES</option>
          <option value="ADMINISTRACION">LIC. EN ADMINISTRACION</option>
          </select>
          <br /><br />
          
          <label>Año:</label><br />
          <select name="year" id="opcion">
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
          <p align="center">     
          <input type="submit" value="Buscar" class="buscar" name="consultar" >
          </p>
        </form>
      </div>
    </body>
</html>
@endsection