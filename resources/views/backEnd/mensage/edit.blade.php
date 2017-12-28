@extends('layoutBack')

@section('contenido')
        <div style="margin: 10px;">
		        <form method="POST" action="{{ route('mensajes.update',$detalleMensage->id) }}">
		        				{!!  method_field('PUT') !!}
		        				{!!  csrf_field() !!}

		        	<label>
		        		<input type="text" name="nombre" id="nombre" value="{{ $detalleMensage->nombre}}">
		        		{!! $errors->first('nombre','<span class=error>:message</span>') !!}
		        	</label><br/>

		        	<label>
		        		<input type="text" name="email" id="email" value ="{{ $detalleMensage->email}}">
		        		{!! $errors->first('email','<span class=error>:message</span>') !!}
		        	</label><br/>
		        	<label>
		        		<input type="text" name="comentario" value="{{ $detalleMensage->comentario}}">
		        	</label>

		        	<label>
		        		<input type="submit" value="Enviar"> 
		        	</label>


	        </form>
	     
	     </div>
	    
@stop