@extends('layout')

@section('content')

<h2 align="center">Métodos de Busqueda</h2>
<div id="contenido">
      
     <div id="formulario2">
          <form enctype="" action="" method="post">
            <p align="center"><span class="Estilo">selecciona un método de búsqueda: </span></p>
      <p align="center">
        <select name="opcion" id="opcion">
          <option value="2">Identificador</option>
          <option value="3">Carrera</option>
          <option value="4">Título</option>
          <option value="5">Autor</option>
          <option value="6">Fecha (ejem: 2001)</option>
          
        </select>
            </p>
                 <p align="center" class="Estilo">Escribe nombre de carrera, titulo,autor o fecha de la tesis</p>
      <p align="center" class="Estilo"> 
        <input name="nombre" type="text" id="nombre" size="50" />
      </p>
      <p align="center" class="Estilo1">    
        <input type="submit" value="Buscar" name="ok" id="ok" />
      </p>
        </form>
         
         </div>   
     
    </div>
@endsection