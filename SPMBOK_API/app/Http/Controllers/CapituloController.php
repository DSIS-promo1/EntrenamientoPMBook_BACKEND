<?php

namespace App\Http\Controllers;

use App\Capitulo;
use Illuminate\Http\Request;

class CapituloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $capitulos = Capitulo::all();
        if(!$capitulos)
        {
            return response()->json(['mensaje' => 'No existen capitulos', 'codigo' => 404],404);
        }
        return response()->json(['datos' => $capitulos],200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->input('cap_ncp') || ! $request->input('cap_des'))
        {
            return response()->json(['mensaje' => 'No se pudieron procesar los valores', 'codigo' => 422],422);
        }
        Capitulo::create($request->all());
        return response()->json(['mensaje' => 'Capitulo insertado'],201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Capitulo  $capitulo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $capitulo = Capitulo::find($id);

        if(!$capitulo)
        {
            return response()->json(['mensaje' => 'No se encuentra este capitulo', 'codigo' => 404],404);
        }
        return response()->json(['datos' => $capitulo],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Capitulo  $capitulo
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $capitulo = Capitulo::find($id);
        if(!$capitulo)
        {
            return response()->json(['mensaje' => 'No se encuentra este capitulo', 'codigo' => 404],404);
        }
        else {

            $capitulo->cap_des = $request->cap_des;
            $capitulo->cap_abr = $request->cap_abr;
            $capitulo->cap_ncp = $request->cap_ncp;
            $capitulo->save();
            return response()->json(['mensaje' => 'Capitulo editado'], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Capitulo  $capitulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $capitulo = Capitulo::find($id);
        if(!$capitulo)
        {
            return response()->json(['mensaje' => 'No se encuentra este capitulo', 'codigo' => 404],404);
        }
        else{
            $capitulo->delete();
            return response()->json(['mensaje' => 'Capitulo eliminado'],200);
        }

    }
}
