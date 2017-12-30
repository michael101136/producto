@extends('layoutBack')

@section('contenido')

        <div style="margin: 10px;">
			<h5>Lista de etapas</h5>
	     	<table   class="table table-condensed">
	     		<thead>
	     			<tr>
	     				<th>Etapa</th>
	     				<th> Acciones</th>
	     			</tr>
	     		</thead>
	     		<tbody>
	     			@foreach( $etapaProducto as $item)
	     			<tr>
	     				<td> 
	     					  <a href="{{route('etapaproducto.show', $item->id)}} "> 
	     					  {{ $item->etapa }} 
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