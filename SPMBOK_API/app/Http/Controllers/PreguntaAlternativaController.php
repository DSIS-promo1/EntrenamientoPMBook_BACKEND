<?php

namespace App\Http\Controllers;


use App\Pregunta;
use App\Alternativa;
use Illuminate\Http\Request;

class PreguntaAlternativaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $pregunta = Pregunta::findOrFail($id);
        return response()->json(['datos' => $pregunta->alternativas], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {


        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $alternativa = new Alternativa();
        $alternativa->alt_des = $request->alt_des;
        $alternativa->alt_res = $request->alt_res;
        $alternativa->pre_ide = $id;
        $alternativa->save();
        return response()->json(['mensaje' => 'Alternativa creada'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id , $idAlt)
    {
        $alternativa = Alternativa::where('pre_ide' , $id)
        ->where('alt_ide', $idAlt)->firstOrFail();
        return response()->json(['datos' => $alternativa], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id ,$idAlt)
    {
        $alternativa = Alternativa::findOrFail($idAlt);
        $alternativa->alt_des = $request->alt_des;
        $alternativa->alt_res = $request->alt_res;
        $alternativa->pre_ide = $id;
        $alternativa->save();
        return response()->json(['mensaje' => 'Alternativa actualizada'] , 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id , $idAlt)
    {
         $alternativa = Alternativa::findOrFail($idAlt);
         $alternativa->delete();
         return response()->json(['mensaje' => 'Alternativa eliminado'],200);
    }
}
