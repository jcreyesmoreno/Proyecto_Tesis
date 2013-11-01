@extends('layout_admin')

@section('content')
<html lang="es">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <h4 align="center">INTRODUCE LA INFORMACION DE LA NUEVA TESIS</h4>
<div id="formulario3">
<form enctype="multipart/form-data" action="/thesis" method="post">
    <label>Título:</label></br> 
      <input type="text" name="nombre" class="campo3"></br>
    <label>Autor:</label></br> 
      <input type="text" name="autor" class="campo3"></br></br>
    <label>Carrera:</label>
      <select name="carrera" id="opcion">
      <option value="Ambiental">Ing. Ambiental</option>
      <option value="Electromecanica">Ing. Electromecánica</option>
      <option value="Electronica">Ing. Electrónica</option>
      <option value="Industrial">Ing. Industrial</option>
      <option value="Gestion">Ing. Gestión Empresarial</option>
      <option value="Quimica">Ing. Química</option>
      <option value="Sistemas">Ing. Sistemas Computacionales</option>
      </select>
    
    <label>Año:</label>
      <select name="year" id="opcion">
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
  
    <p>Indice(archivo)
      <input type="file" name="indice">
    </p>
    <p>Prologo(archivo)
      <input type="file" name="prologo">
    </p>
    <p>Tesis(archivo)
      <input type="file" name="tesis">
    </p>
    <p align="center">
      <input type="submit" class="buscar" value="Agregar Tesis">
    </p>
  </form>
</div>
</body>
</html>
@endsection
