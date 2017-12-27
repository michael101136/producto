<?php

namespace App\Http\Controllers;

use DB;
use App\Mensaje;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class MesageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct()
    {
          $this->middleware('auth', ['except' => ['create', 'store']]);
    }


    public function index()
    {
        
        //$mensage=DB::table('mensajes')->get();QUERY BUILDER
        $mensage=Mensaje::all();
        //return $mensage;
        return view('mensage.index',['mensage' => $mensage ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lenguajes=[
        'c++',
        'php',
        'asp'
        ];
        return view('mensage/create',['lenguajes' => $lenguajes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
         /*DB::table('mensajes')->insert([
            "nombre" => $request->input('nombre'),
            "comentario" => $request->input('comentario'),
            "email"  => $request->input('email')    
         ]);*/
         Mensaje::create($request->all());


         return redirect()->route('mensajes.create')->with('info' , 'Hemos recibidos tu mensaje');
         //return $request->all;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$detalleMensage =DB::table('mensajes')->where('id' , $id)->first();
        $detalleMensage =Mensaje::findOrFail($id);
        return view('mensage.show', ['detalleMensage' => $detalleMensage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        //$detalleMensage =DB::table('mensajes')->where('id' , $id)->first();
          $detalleMensage =Mensaje::findOrFail($id);
        return view('mensage.edit',['detalleMensage' => $detalleMensage]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       /* DB::table('mensajes')->where('id',$id)->update([

            "nombre" => $request->input('nombre'),
            "comentario" => $request->input('comentario'),
            "email"  => $request->input('email')  
        ]);*/
       $detalleMensage =Mensaje::findOrFail($id);

       $detalleMensage->update($request->all());

        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DB::table('mensajes')->where('id' , $id)->delete();
        $mensaje = Mensaje::findOrFail($id);

        $mensaje->delete();

        return redirect()->route('mensajes.index');
    }
}
