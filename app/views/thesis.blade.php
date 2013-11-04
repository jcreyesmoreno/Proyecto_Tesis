<section>
	@if(isset($Thesis))
<html lang="es">
	<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	{{ HTML::style('css/style.css') }}
	</head>
	<body>
		<div class="table">
		<h2 align="center">RESULTADOS DE LA BUSQUEDA</h2>
		</div>
		<table class="tabla">
			<tr>
				<th class="num">N°</th>
				<th class="tit">TITULO</th>
				<th class="carr">CARRERA</th>
				<th class="ind">INDICE</th>
				<th class="prol">PROLOGO</th>
				<th class="tes">TESIS</th>
			</tr>
		@for ($i = 0; $i < count($Thesis); $i++)
			<tr>
				<td class="view">{{ $i + 1 }}</td>
				<td class="view">{{ $Thesis[$i]->title }}</td>
				<td class="view">{{ $Thesis[$i]->career }}</td>
				<td class="ver1"><a href="/indice/pdf/{{ $Thesis[$i]->id }}">VER</a></td>
				<td class="ver2"><a href="/prologo/pdf/{{ $Thesis[$i]->id }}">VER</a></td>
				<td class="ver3"><a href="/tesis/pdf/{{ $Thesis[$i]->id }}">VER</a></td>
				<td class="del"><a href="">ELIMINAR</a></td>
			</tr>
		@endfor
		</table>
		
	</boby>
	@else
		<p>No se ha realizado ninguna consulta</p>	
	@endif
</section>