@extends('layoutBack')

@section('contenido')
		<h1>Editar usuario</h1>
        @if(session()->has('info'))
				<div class="alert alert-success"> {{ session('info')}} </div>
        @endif

        <div style="margin: 10px;">
		        <form method="POST" action="{{ route('usuarios.update',$user->id) }}">
		        				{!!  method_field('PUT') !!}
		        				{!!  csrf_field() !!}

		        	<label>
		        		<input type="text" name="nombre" id="nombre" value="{{ $user->name}}">
		        		{!! $errors->first('nombre','<span class=error>:message</span>') !!}
		        	</label><br/>

		        	<label>
		        		<input type="text" name="email" id="email" value ="{{ $user->email}}">
		        		{!! $errors->first('email','<span class=error>:message</span>') !!}
		        	</label><br/>

		        	<label>
		        		<input type="submit" value="Enviar"> 
		        	</label>


	        </form>
	     
	     </div>
	    
@stop