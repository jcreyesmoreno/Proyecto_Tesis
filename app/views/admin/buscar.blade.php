@extends('layout_admin')

@section('content')
<html lang="es">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<form name="consulta" action=""  method="post">
    <p align="center">Introdusca ID:  <input type="text" name="id" size="30">
    <p align="center">Nombre de la tesis: <input type="text" name="nombre" size="30"></br>
          <p align="center">Autor: <input type="text" name="autor" size="30"></br>
          <p align="center">Carrera: 
          <select name="opcion" id="opcion">
          <option value="2">Ing. Ambiental</option>
          <option value="3">Ing. Electromecánica</option>
          <option value="4">Ing. Electrónica</option>
          <option value="5">Ing. Industrial</option>
          <option value="6">Ing. Gestión Empresarial</option>
          <option value="5">Ing. Química</option>
          <option value="5">Ing. Sistemas Computacionales</option>
          </select>
          </br>
          <p align="center">Año:
          <select name="opcion" id="opcion">
          <option value="2">1990</option>
          <option value="3">1991</option>
          <option value="4">1992</option>
          <option value="5">1993</option>
          <option value="6">1994</option>
          <option value="7">1995</option>
          <option value="8">1996</option>
          <option value="9">1997</option>
          <option value="10">1998</option>
          <option value="11">1999</option>
          <option value="12">2000</option>
          <option value="13">2001</option>
          <option value="14">2002</option>
          <option value="15">2003</option>
          <option value="16">2004</option>
          <option value="17">2005</option>
          <option value="18">2006</option>
          <option value="19">2007</option>
          <option value="20">2008</option>
          <option value="21">2009</option>
          <option value="22">2010</option>
          <option value="23">2011</option>
          <option value="24">2012</option>
          <option value="25">2013</option>
          </select>
          </br> 
          </br>  
         
    <input type="submit" value="Buscar" name="consultar" >
</form>
</body>
</html>
@endsection