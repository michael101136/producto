@extends('layoutBack')

@section('contenido')
       
        <div style="margin: 10px;">
			<h1>Nombre Completo</h1>
			{{ $detalleMensage->nombre}} -{{ $detalleMensage->email }}
	     	
	     </div>
	    
@stop