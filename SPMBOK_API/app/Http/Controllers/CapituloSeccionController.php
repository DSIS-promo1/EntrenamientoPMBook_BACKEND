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
        $capitulo   = Capitulo::find($id);

        if(!$capitulo)
        {
            return response()->json(['mensaje' => 'No existe el Capitulo asociado', 'codigo' => 404],404);
        }
        return response()->json(['mensaje' => $capitulo->secciones, 'codigo' => 200],200);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store($id,Request $request)
    {
        $capitulo = Capitulo::find($id);

        if(!$capitulo)
        {
            return response()->json(['mensaje' => 'No existe el Capitulo asociado', 'codigo' => 404],404);
        }

        //$capitulo->evaluacion()->create($request->all());
        Seccion::create([
            'cap_id'  => $id,
            'sec_des' => $request->sec_des,
            'sec_abr' => $request->sec_abr,
            'sec_nsc' => $request->sec_nsc
        ]);

        return response()->json(['mensaje' => 'Sección insertada'],201);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function show($idCapitulo , $idSeccion)
    {

        $capitulo = Capitulo::find($idCapitulo);

        if(!$capitulo)
        {
            return response()->json(['mensaje' => 'No existe el Capitulo asociado', 'codigo' => 404],404);
        }

        $seccion = Seccion::find($idSeccion);
        if(!$seccion)
        {
            return response()->json(['mensaje' => 'No existe la sección asociada', 'codigo' => 404],404);
        }

        return response()->json(['mensaje' => $seccion, 'codigo' => 200],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\seccion  $seccion
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$idCapitulo,$idSeccion)
    {
        $capitulo = Capitulo::find($idCapitulo);

        if(!$capitulo)
        {
            return response()->json(['mensaje' => 'No existe el Capitulo asociado', 'codigo' => 404],404);
        }

        $seccion = Seccion::find($idSeccion);
        if(!$seccion)
        {
            return response()->json(['mensaje' => 'No existe la sección asociada', 'codigo' => 404],404);
        }

        $seccion->sec_des = $request->sec_des;
        $seccion->sec_abr = $request->sec_abr;
        $seccion->sec_nsc = $request->sec_nsc;

        $seccion->save();

        return response()->json(['mensaje' => 'Sección actualizada'],201);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\seccion  $seccion
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCapitulo,$idSeccion)
    {
        $capitulo = Capitulo::find($idCapitulo);

        if(!$capitulo)
        {
            return response()->json(['mensaje' => 'No existe el Capitulo asociado', 'codigo' => 404],404);
        }

        $seccion = Seccion::find($idSeccion);
        if(!$seccion)
        {
            return response()->json(['mensaje' => 'No existe la sección asociada', 'codigo' => 404],404);
        }
        $seccion->delete();
        return response()->json(['mensaje' => 'Sección eliminada', 'codigo' => 404],404);
    }
}
