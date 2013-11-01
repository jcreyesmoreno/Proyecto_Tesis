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
		<h2 align="center">RESULTADOS DE LA BUSQUEDA</h2>
		<div class="table">
		<table class="tabla">
			<tr>
				<th class="num">N°</th>
				<th class="tit">TITULO</th>
				<td class="carr">CARRERA</td>
				<td class="ind">INDICE</td>
				<td class="prol">PROLOGO</td>
				<td class="tes">TESIS</td>
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
		</div>
	</boby>
	@else
		<p>No se ha realizado ninguna consulta</p>	
	@endif
</section>