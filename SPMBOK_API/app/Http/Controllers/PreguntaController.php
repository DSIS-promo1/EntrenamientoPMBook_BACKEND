<?php

namespace App\Http\Controllers;

use App\Pregunta;
use Illuminate\Http\Request;
use JWTAuth;
class PreguntaController extends Controller
{

    protected $user;

    public function __construct(){
        $this->user = JWTAuth::parseToken()->authenticate();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pregunta = Pregunta::all();

        if(!$pregunta)
        {
            return response()->json(['mensaje' => 'No existen preguntas', 'codigo' => 404],404);
        }
        return response()->json(['datos' => $pregunta],200);
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
        Pregunta::create([
            'sec_ide' => $request->sec_ide,
            'pre_des' => $request->pre_des,
            'pre_arg' => $request->pre_arg,
            'fue_ide' => $request->fue_ide,
            'usu_ide' => $this->user->id,
            'pre_niv' => $request->pre_niv,
            'pre_est' => $request->pre_est
        ]);

        return response()->json(['mensaje' => 'Pregunta insertada'],201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pregunta = Pregunta::find($id);

        if(!$pregunta)
        {
            return response()->json(['mensaje' => 'No se encuentra esta Pregunta', 'codigo' => 404],404);
        }
        return response()->json(['datos' => $pregunta],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(Pregunta $pregunta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pregunta = Pregunta::find($id);
        if(!$pregunta)
        {
            return response()->json(['mensaje' => 'No se encuentra esta pregunta', 'codigo' => 404],404);
        }
        else {
            $pregunta->sec_ide = $request->sec_ide;
            $pregunta->pre_des = $request->pre_des;
            $pregunta->pre_arg = $request->pre_arg;
            $pregunta->fue_ide = $request->fue_ide;
            $pregunta->usu_ide = $this->user->id;
            $pregunta->pre_niv = $request->pre_niv;
            $pregunta->pre_est = $request->pre_est;
            $pregunta->save();
            return response()->json(['mensaje' => 'Pregunta editada'], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pregunta = Pregunta::find($id);
        if(!$pregunta)
        {
            return response()->json(['mensaje' => 'No se encuentra esta pregunta', 'codigo' => 404],404);
        }
        else{
            $pregunta->delete();
            return response()->json(['mensaje' => 'Pregunta eliminada'],200);
        }
    }
}
