<section>
	@if(isset($Thesis))
		<table>
			<tr>
				<th>N°</th>
				<th>Titulo</th>
				<td>Carrera</td>
				<td>Indice</td>
				<td>Prologo</td>
				<td>Tesis</td>
			</tr>
		@for ($i = 0; $i < count($Thesis); $i++)
			<tr>
				<td>{{ $i + 1 }}</td>
				<td>{{ $Thesis[$i]->title }}</td>
				<td>{{ $Thesis[$i]->career }}</td>
				<td><a href="/indice/pdf/{{ $Thesis[$i]->id }}">Ver</a></td>
				<td><a href="/prologo/pdf/{{ $Thesis[$i]->id }}">Ver</a></td>
				<td><a href="/tesis/pdf/{{ $Thesis[$i]->id }}">Ver</a></td>
			</tr>
		@endfor
		</table>
	@else
		<p>No se ha realizado ninguna consulta</p>	
	@endif
</section>