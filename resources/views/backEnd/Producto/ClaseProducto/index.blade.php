@extends('layoutBack')

@section('contenido')

        <div style="margin: 10px;">
			<h5>Lista de medida</h5>
	     	<table   class="table table-condensed">
	     		<thead>
	     			<tr>
	     				<th>Clase producto</th>
	     				<th> Acciones</th>
	     			</tr>
	     		</thead>
	     		<tbody>
	     			@foreach($claseProducto as $item)
	     			<tr>
	     				<td> 
	     					  <a href="{{route('claseproducto.show', $item->id)}} "> 
	     					  {{ $item->clase_producto }} 
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