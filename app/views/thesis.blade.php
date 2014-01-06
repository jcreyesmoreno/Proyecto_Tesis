<section>
	@if(isset($Thesis))
<html lang="es">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-escale=1.0">
  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
  {{ HTML::style('dist/login.css') }}
	</head>
	<body>
		<div class="table">
		<h2 align="center">RESULTADOS DE LA BUSQUEDA</h2>
		</div>
		<table class="table table-hover table-bordered" cellspacing="2">
			<tr>
				<th class="num">N°</th>
				<th class="tit">TITULO</th>
				<th class="carr">CARRERA</th>
				<th class="carr">AUTOR</th>
				<th class="carr">AÑO</th>
				<th class="ind">INDICE</th>
				<th class="prol">PROLOGO</th>
				<th class="tes">TESIS</th>
			</tr>
		@for ($i = 0; $i < count($Thesis); $i++)
			<tr>
				<td class="view">{{ $i + 1 }}</td>
				<td class="view">{{ $Thesis[$i]->title }}</td>
				<td class="view">{{ $Thesis[$i]->career }}</td>
				<td class="view">{{ $Thesis[$i]->author }}</td>
				<td class="view">{{ $Thesis[$i]->year }}</td>
				<td class="ver"><a href="/indice/pdf/{{ $Thesis[$i]->id }}">VER</a></td>
				<td class="ver"><a href="/prologo/pdf/{{ $Thesis[$i]->id }}">VER</a></td>
				<td class="ver"><a href="/tesis/pdf/{{ $Thesis[$i]->id }}">VER</a></td>
				<td class="del">

					

					<form action="/thesis/delete" method="POST">
						<input type="hidden" name="id" value="{{ $Thesis[$i]->id }}">
						<!--<input type="submit" class="btn btn-danger" class="delete" value="Eliminar">-->
						<button type="text" class="btn btn-danger" name="eliminar">
            			<span class="glyphicon glyphicon-trash"></span> Eliminar
          				</button> 
					</form>
				</td>
			</tr>
		@endfor
		</table>
		<br />
		<form action="/searchtesis" method="get">
			<!--<p align="center">     
    		<input type="submit" class="btn btn-success btn-lg" value="Regresar" class="regresar">
  			</p>-->
  			<p align="center">
  			<button type="text" class="btn btn-success btn-lg" name="Regresar">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Regresar
          </button>	</p>
  		</form>
	</boby>
	@else
		<p>No se ha realizado ninguna consulta</p>	
	@endif
</section>