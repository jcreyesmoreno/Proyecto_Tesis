	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-escale=1.0">
	  <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
	  <link rel="stylesheet" type="text/css" href="dist/css/bootstrap.css">
	  {{ HTML::script('js/alert.js') }}
	  {{ HTML::style('dist/login.css') }}
	<section>
		@if(isset($Thesis))
			<div class="table">
				<h2 align="center">RESULTADOS DE LA BÚSQUEDA POR
					@if(isset($fields['title']))
          				TITULO: {{ $fields['title'] }}
        			@endif

       				 @if(isset($fields['career']))
        				CARRERA: {{ $fields['career'] }}
			        @endif

			        @if(isset($fields['author']))
			          AUTOR: {{ $fields['author'] }}
			        @endif

			        @if(isset($fields['year']))
			          AÑO: {{ $fields['year'] }}
			        @endif						 
        		</h2>
			</div>
			<table class="table table-hover table-bordered" cellspacing="2">
				<thead>	
					<tr>
						<th class="num">N°</th>
          				@if(!isset($fields['title']))
  				  		<th class="tit">TITULO</th>
          				@endif
          				@if(!isset($fields['career']))
	  				  	<th class="carr">CARRERA</th>
	          			@endif
	          			@if(!isset($fields['author']))
	            		<th class="carr">AUTOR</th>
	          			@endif
	         			@if(!isset($fields['year']))
	            		<th class="carr">AÑO</th>
	          			@endif
	  					<th class="ind">INDICE</th>
	  					<th class="prol">PROLOGO</th>
	  					<th class="tes">TESIS</th>
	  					@if(isset($Type))
							@if($Type=="admin")
	  							<th class="tes"></th>
	  						@endif
	  					@endif		
					</tr>
				</thead>
				<tbody>
			@for ($i = 0; $i < count($Thesis); $i++)
				<tr>
				  <td class="view">{{ $i + 1 }}</td>
					@if(!isset($fields['title']))
  				  <td class="view">{{ $Thesis[$i]->title }}</td>
          			@endif
          			@if(!isset($fields['career']))
  				  <td class="view">{{ $Thesis[$i]->career }}</td>
          			@endif
          			@if(!isset($fields['author']))
  				  <td class="view">{{ $Thesis[$i]->author }}</td>
          			@endif
          			@if(!isset($fields['year']))
  				  <td class="view">{{ $Thesis[$i]->year }}</td>
          			@endif
					<td class="ver"><a href="/indice/pdf/{{ $Thesis[$i]->id }}" target="_blank">VER</a></td>
					<td class="ver"><a href="/prologo/pdf/{{ $Thesis[$i]->id }}" target="_blank">VER</a></td>
					<td class="ver"><a href="/tesis/pdf/{{ $Thesis[$i]->id }}" target="_blank">VER</a></td>
					@if(isset($Type))
						@if($Type=="admin")

					<td class="del">
						<button type="button" class="btn btn-danger boton_delete" value="{{ $Thesis[$i]->id }}">
							<span class="glyphicon glyphicon-trash"></span> Eliminar
			          	</button> 
					</td>
						@endif	
					@endif
				</tr>
			@endfor
				<tbody>
			</table>
			<br />
			<form action="/search" method="get">
	  			<p align="center">
	  			<button type="text" class="btn btn-success btn-lg" id="Regresar">
	            <span class="glyphicon glyphicon-circle-arrow-left"></span> Regresar
	          </button>	</p>
	  		</form>
		@else
			<p>No se ha realizado ninguna consulta</p>	
		@endif
	</section>