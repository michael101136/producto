@extends('layoutBack')

@section('contenido')
        <div style="margin: 10px;">
			<h5>Lista de mensages</h5>
	     	<table   class="table table-condensed">
	     		<thead>
	     			<tr>
	     				<th>Nombre</th>
	     				<th>Email</th>
	     				<th>Role</th>
	     				<th>Acciones</th>
	     			</tr>
	     		</thead>
	     		<tbody>
	     			@foreach( $Users as $item)
	     				<tr>
	     					
	     					<td>
								{{ $item->name}}
	     					</td>

	     					<td>
	     						{{$item->email }}
	     					</td>

	     					<td>
	     						@foreach ($item->roles as $role)
	     							{{$role->display_name }}
								@endforeach
	     					</td>

	     					<td>
	     						
		     						<a href="{{ route('usuarios.edit',$item->id)}}" class="btn btn-primary btn-xs">
			     						Editar
			     					</a>
									 <form style="display: inline; " method="POST" action="{{route('usuarios.destroy',$item->id)}}">
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