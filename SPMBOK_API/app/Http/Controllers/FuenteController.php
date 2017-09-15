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

        return response()->json($fuentes);
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
        return response()->json($fuente);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fuente  $fuente
     * @return \Illuminate\Http\Response
     */
    public function show(Fuente $fuente)
    {
        //
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
        return response()->json($fuente);
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
    }
}
