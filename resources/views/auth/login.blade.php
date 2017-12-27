@extends('layoutBack')

@section('contenido')
     
        <div style="margin: 0px;">

		       
	     	<div class="panel panel-default">
			  <div class="panel-heading">Ingrese sus datos</div>
				  <div class="panel-body">

						<div class="container" >
                           
                          	<div class="row">
                          		<div class="col-md-4" style="float: center;">
                          		</div>
                                <div class="col-md-4" style="float: center;background: #e3e3e3;">
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
							      	<div class="col-md-4" style="float: center;">
	                          		</div>
						      	</div>
						     </div>
						 </div>
			      		<br/>
				  </div>
			</div>
	     </div>
	    
@stop