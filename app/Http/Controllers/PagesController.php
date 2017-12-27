<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\CreateMensageRequest;

class PagesController extends Controller
{
	/*protected $request;*/

	public function __construct(Request $request)
	{
		$this->middleware('verificarContacto',['only' => ['hola']]);
	}

	public function inicio()
	{
		   return view('inicio/inicio');
	}
	/*public function contacto($nombre='Invitado')
	{
		$lenguajes=[
    	'c++',
    	'php',
    	'asp'
	    ];
	    return view('welcome',['nombre' => $nombre, 'lenguajes' => $lenguajes]);
	}*/
	/*public function  mensaje(CreateMensageRequest $request)
	{
		/*if($request->has('nombre'))//para verificar si tiene nombre asignado
		{
			return "tiene nombre :".$request->input('nombre');
		}*/
		//validaciones

		/*return redirect()
						->route('contacto')
						->with('info' , 'se registro correcto');*/

		//$data=$request->all();

		//return response()->json(['data' => $data], 200);
	//}

	public function nosotros()
	{
		return view('inicio/nosotros');
	}

	public function visitarTemplos()
	{
		return view('inicio/visitarTemplos');
	}


}
