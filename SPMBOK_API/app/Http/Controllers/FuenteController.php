<?php

namespace App\Http\Controllers;

use App\Fuente;
use Illuminate\Http\Request;

class FuenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuentes = Fuente::all();

        return response()->json([ 'datos' => $fuentes] , 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fuente = Fuente::create([
            'fue_des' => $request->fue_des,
            'fue_abr' => $request->fue_abr
        ]);
        return response()->json(['mensaje' => 'Fuente creada'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fuente  $fuente
     * @return \Illuminate\Http\Response
     */
    public function show(Fuente $fuente)
    {
        return response()->json(['datos' => $fuente], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fuente  $fuente
     * @return \Illuminate\Http\Response
     */
    public function edit(Fuente $fuente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fuente  $fuente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fuente $fuente)
    {
        $fuente->fue_des = $request->fue_des;
        $fuente->fue_abr = $request->fue_abr;
        $fuente->save();
        return response()->json(['mensaje' => 'Fuente actualizada'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fuente  $fuente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fuente $fuente)
    {
        $fuente->delete();
        return response()->json(['mensaje' => 'Fuente eliminada'], 201);
    }
}
