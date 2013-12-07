@extends('layout')

@section('content')
<!--<script type="text/javascript" src="js/ajax_script.js">
</script>-->

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
    <select name="opcion" id="opcion">
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
    <br /><br />
          
    <label>Año:</label><br />
    <select name="opcion" id="opcion">
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
    </br> 
    </br>  
    <p align="center">     
    <input type="submit" value="Buscar" class="buscar" name="consultar1" >
    </p>
  </form>
  </div>
</body>
@endsection