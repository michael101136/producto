@extends('layoutBack')
@section('contenido')
        <div style="margin: 1px;">
			@if(session()->has('info'))
				<h3> {{ session('info')}} </h3>
			@endif
			<div class="panel panel-success"">
				<div class="panel-heading">Envio de Mensajes</div>
				<div class="panel-body">
					<div class="col-lg-5">
							<img src="http://mw2.google.com/mw-panoramio/photos/medium/115993883.jpg" class="img-thumbnail">	
					</div>
					<div class="col-lg-7">
					<form method="POST" class="form-horizontal" action="{{ route('mensajes.store') }}">
						{!!  csrf_field() !!}

						<div class="form-group"> 
							<label  class="col-lg-2 control-label">
								Nombre
							</label>
							<div class="col-lg-5">
								<input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre') }}" placeholder="Nombre">
								{!! $errors->first('nombre','<span class=error>:message</span>') !!}
							</div>
						</div>

						<div class="form-group"> 
							<label  class="col-lg-2 control-label">
								Email
							</label>
							<div class="col-lg-5">
								<input type="text" class="form-control" name="email" id="email" value ="{{ old('email')}}" placeholder="Email">
								{!! $errors->first('email','<span class=error>:message</span>') !!}
							</div>
						</div>

						<div class="form-group"> 
							<label  class="col-lg-2 control-label">
								Mensage
							</label>
							<div class="col-lg-5">
								<input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre') }}" placeholder="Mensage">
								{!! $errors->first('nombre','<span class=error>:message</span>') !!}
							</div>
						</div>

						<div class="form-group"> 
							<label  class="col-lg-2 control-label">
								Comentarios
							</label>
							<div class="col-lg-5">

								<input type="text" name="comentario" class="form-control" placeholder="Comentarios">

							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-offset-2 col-lg-10">
								<input type="submit" value="Enviar" class="btn btn-info"> 
							</div>
						</div>

					</form>
				</div>
				</div>
			</div>

	     </div>
	    
@stop