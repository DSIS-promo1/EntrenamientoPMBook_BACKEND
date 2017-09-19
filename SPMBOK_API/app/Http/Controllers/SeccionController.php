<?php

namespace App\Http\Controllers;

use App\Seccion;
use Illuminate\Http\Request;

class SeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['datos' => Seccion::all()],200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

        $seccion = Seccion::find($id);

        if(!$seccion)
        {
            return response()->json(['mensaje' => 'No se encuentra esta sección', 'codigo' => 404],404);
        }

        return response()->json(['datos' => $seccion],200);
    }



}
