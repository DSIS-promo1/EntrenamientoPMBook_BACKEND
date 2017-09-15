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
        return response()->json($capitulos);
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
        $capitulo = Capitulo::create([
           'cap_des' =>  $request->cap_des,
           'cap_abr' =>  $request->cap_abr,
            'cap_ncp' =>  $request->cap_ncp
        ]);
        return response()->json($capitulo);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Capitulo  $capitulo
     * @return \Illuminate\Http\Response
     */
    public function show(Capitulo $capitulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Capitulo  $capitulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Capitulo $capitulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Capitulo  $capitulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Capitulo $capitulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Capitulo  $capitulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Capitulo $capitulo)
    {
        //
    }
}
