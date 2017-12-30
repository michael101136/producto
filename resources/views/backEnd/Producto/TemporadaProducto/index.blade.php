@extends('layoutBack')

@section('contenido')

        <div style="margin: 10px;">
			<h5>Lista de temporadas de productos</h5>
	     	<table   class="table table-condensed">
	     		<thead>
	     			<tr>
	     				<th>Temporada</th>
	     				<th> Acciones</th>
	     			</tr>
	     		</thead>
	     		<tbody>
	     			@foreach( $temporadaProducto as $item)
	     			<tr>
	     				<td> 
	     					  <a href="{{route('temporadaproducto.show', $item->id)}} "> 
	     					  {{ $item->temporada }} 
	     					  </a>	
	     				</td>
	     				<td> 
	     				</td>
	     			</tr>
	     			@endforeach
	     		</tbody>
	     	</table>
	     </div>	    
@stop