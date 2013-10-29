@extends('layout')

@section('content')
<!--<script type="text/javascript" src="js/ajax_script.js">
</script>-->

<h4 align="center">SELECCIONA CUALQUIER METODO DE BUSQUEDA</h2>
  <div id="formulario4">
  <form name="consulta" action="/search"  method="post">
    <!--<p>Introdusca ID:  <input type="text" name="id" size="34">-->
    <p>Nombre de la tesis:</br>
      <input type="text" name="nombre" class="campo4"></br>
    <p>Autor:</br>
      <input type="text" name="autor" class="campo4"></br>
          <p align="center">Carrera: 
          <select name="opcion" id="opcion">
          <option value="2">Ing. Ambiental</option>
          <option value="3">Ing. Electromecánica</option>
          <option value="4">Ing. Electrónica</option>
          <option value="5">Ing. Industrial</option>
          <option value="6">Ing. Gestión Empresarial</option>
          <option value="5">Ing. Química</option>
          <option value="5">Ing. Sistemas Computacionales</option>
          <option value="5">Lic. Administración</option>
          </select>
          
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
         
    <input type="submit" value="Buscar" class="buscar" name="consultar" >
</form>
</div>
<!--<input type="button" id="boton" value="Abrir cuadro de diálogo">
<div id="dialogo" title="Cuadro de diálogo">
<p>
<span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Ejemplo de cuadro de diálogo, pon aquí tu aviso</p>
</div>-->

      
     <!--<div class="formulario2">
          <form enctype="" action="" method="post">
            <p><span class="Estilo">selecciona un método de búsqueda: </span></p>
      <p>
        <select name="opcion" id="opcion">
          <option value="2">Identificador</option>
          <option value="3">Carrera</option>
          <option value="4">Título</option>
          <option value="5">Autor</option>
          <option value="6">Fecha (ejem: 2001)</option>
          
        </select>
            </p>
                 <p class="Estilo">Escribe nombre de carrera, titulo,autor o fecha de la tesis</p>
      <p align="center" class="Estilo"> 
        <input name="nombre" type="text" id="nombre" size="48" />
      </p>
      <p class="Estilo1">    
        <input type="submit" value="Buscar" name="ok" id="ok" />
      </p>
        </form>
         
         </div>-->   
     
    
@endsection