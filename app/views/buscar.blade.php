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
    <option value="Ambiental">ING. AMBIENTAL</option>
    <option value="Electromecanica">ING. ELECTROMECANICA</option>
    <option value="Electronica">ING. ELECTRONICA</option>
    <option value="Industrial">ING. INDUSTRIAL</option>
    <option value="Gestion">ING. EN GESTION EMPRESARIAL</option>
    <option value="Quimica">ING. QUIMICA</option>
    <option value="Sistemas">ING. EN SISTEMAS COMPUTACIONALES</option>
    </select>
    <br /><br />
          
    <label>Año:</label><br />
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
    <p align="center">     
    <input type="submit" value="Buscar" class="buscar" name="consultar" >
    </p>
  </form>
  </div>
</body>
@endsection