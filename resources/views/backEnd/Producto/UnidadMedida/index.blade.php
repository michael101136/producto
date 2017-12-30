@extends('layoutBack')

@section('contenido')

        <div style="margin: 10px;">
			<h5>Lista de medida</h5>
	     	<table   class="table table-condensed">
	     		<thead>
	     			<tr>
	     				<th>Medida</th>
	     				<th> Acciones</th>
	     			</tr>
	     		</thead>
	     		<tbody>
	     			@foreach( $unidadMedida as $item)
	     			<tr>
	     				<td> 
	     					  <a href="{{route('unidadmedida.show', $item->id)}} "> 
	     					  {{ $item->medida }} 
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