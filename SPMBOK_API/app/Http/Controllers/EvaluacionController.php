<?php

namespace App\Http\Controllers;

use App\Evaluacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
use JWTAuth;
class EvaluacionController extends Controller
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
        $evaluaciones = Evaluacion::all();

        return response()->json(['datos' => $evaluaciones], 200);
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
        $evaluacion = Evaluacion::create([
            'eva_sec' => $request->eva_sec,
            'eva_fec' => Carbon::now()->toDateString(),
            'eva_nta' => $request->eva_nta,
            'usu_ide' => $this->user->id
        ]);

        return response()->json(['mensaje' => 'Evaluacion creada'], 201);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json([ 'datos' => Evaluacion::findOrFail($id)] , 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $evaluacion = Evaluacion::findOrFail($id);
        $evaluacion->eva_sec = $request->eva_sec;
        $evaluacion->eva_nta = $request->eva_nta;
        $evaluacion->eva_fec = Carbon::now()->toDateString();
        $evaluacion->usu_ide = 1;
        $evaluacion->save();
        return response()->json(['mensaje' => 'Evaluacion actualizada'], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $evaluacion->delete();
        return response()->json(['mensaje' => 'Evaluacion eliminada'], 201);
    }
}
