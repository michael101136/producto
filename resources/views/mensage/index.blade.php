@extends('layoutBack')

@section('contenido')

        <div style="margin: 10px;">
			<h5>Lista de mensages</h5>
	     	<table   class="table table-condensed">
	     		<thead>
	     			<tr>
	     				<th>Nombre</th>
	     				<th>Comentario</th>
	     				<th> Email</th>
	     				<th> Acciones</th>
	     			</tr>
	     		</thead>
	     		<tbody>
	     			@foreach( $mensage as $item)
	     			<tr>
	     				<td> 
	     					  <a href="{{route('mensajes.show', $item->id)}} "> 
	     					  {{ $item->nombre }} 
	     					  </a>	
	     				</td>
	     				<td> {{ $item->comentario}} </td>
	     				<td>{{ $item->email}} </td>
	     				<td>
	     					<a href="{{ route('mensajes.edit',$item->id)}}" class="btn btn-primary btn-xs">
	     						Editar
	     					</a>
							 <form style="display: inline; " method="POST" action="{{route('mensajes.destroy',$item->id)}}">
								<button type="submit" class="btn btn-danger btn-xs"> Eliminar</button>
								{!!  csrf_field() !!}

								{!!  method_field('Delete') !!}
	     					</form>
	     					
	     				</td>
	     			</tr>
	     			@endforeach
	     		</tbody>
	     	</table>
	     </div>
	    
@stop