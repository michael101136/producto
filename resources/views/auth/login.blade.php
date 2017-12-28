@extends('layoutLogin')

@section('contenido')
	<div class="login-box">
			 <div class="login-box-body">
					 <div class="login-logo">
					    	<b>Ingrese sus datos</b>
					  </div>
						<form method="POST" action="login">
			        				{!!  csrf_field() !!}
								<div class="form-group">
										<label for="name" class="cols-sm-1 control-label">Email</label>
										<div class="cols-sm-1">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
												<input type="email" name="email"  placeholder="Email" class="form-control">
											</div>
										</div>
								</div>
								<div class="form-group">
										<label for="name" class="cols-sm-1 control-label">Contraseña</label>
										<div class="cols-sm-1">
											<div class="input-group">
												<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
												<input type="password" name="password" placeholder="Contraseña" class="form-control">
											</div>
										</div>
								</div>
								<div class="form-group" style="margin-left: 150px;">
										<div class="cols-sm-2">
											<div class="input-group">
												<input type="submit" value="Iniciar" class="btn btn-info btn-md">
											</div>
										</div>
								</div>
			      		</form>			 	


		    </div>
	</div>
		    
@stop