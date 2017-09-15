<?php

namespace App\Http\Controllers;

use App\seccion;
use App\Capitulo;
use Illuminate\Http\Request;

class CapituloSeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $capitulo   =Capitulo::find($id);
        $seccion    =$capitulo->secciones;

        return response()->json([$seccion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($capitulo,$seccion)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($capitulo,Request $request)
    {
        //return "capitulo ".$capitulo;
        Seccion::create([
            'cap_id'  => $i,
            'sec_des' => 'desc_'.$o,
            'sec_abr' => 'abr_'.$o,
            'sec_nsc' => '1.'.$o,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function show($capitulo , $seccion)
    {

        //return "seccion ".$seccion;
       $seccion    = Seccion::find($seccion);
        return response()->json([$seccion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function edit(seccion $seccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, seccion $seccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function destroy(seccion $seccion)
    {
        //
    }
}
