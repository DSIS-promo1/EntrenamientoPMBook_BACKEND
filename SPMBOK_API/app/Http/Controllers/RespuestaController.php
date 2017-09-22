<?php

namespace App\Http\Controllers;

use App\Respuesta;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $respuestas = Respuesta::all();
        if(!$respuestas)
        {
            return response()->json(['mensaje' => 'No existen respuestas', 'codigo' => 404],404);
        }
        return response()->json(['datos' => $respuestas],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Respuesta::create([
            'eva_ide' => $request->eva_ide,
            'alt_ide' => $request->alt_ide
        ]);

        return response()->json(['mensaje' => 'Respuesta insertada'],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $respuesta = Respuesta::find($id);

        if(!$respuesta)
        {
            return response()->json(['mensaje' => 'No se encuentra esta respuesta', 'codigo' => 404],404);
        }
        return response()->json(['datos' => $respuesta],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuesta $respuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $respuesta = Respuesta::find($id);
        if(!$respuesta)
        {
            return response()->json(['mensaje' => 'No se encuentra esta respuesta', 'codigo' => 404],404);
        }
        else {
            $respuesta->eva_ide = $request->eva_ide;
            $respuesta->alt_ide = $request->alt_ide;
            $respuesta->save();
            return response()->json(['mensaje' => 'Respuesta editada'], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $respuesta = Respuesta::find($id);
        if(!$respuesta)
        {
            return response()->json(['mensaje' => 'No se encuentra esta respuesta', 'codigo' => 404],404);
        }
        else{
            $respuesta->delete();
            return response()->json(['mensaje' => 'Respuesta eliminada'],200);
        }
    }
}
