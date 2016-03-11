@extends('layout_admin')

@section('content')
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-escale=1.0">
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
  {{ HTML::style('dist/login.css') }}
    <h4 align="center">SELECCIONA EL EXCEL PARA ACTUALIZAR ALUMNOS</h4>
      <br />
      <br />
      <br />
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
      </form>
    </div>
@endsection
      