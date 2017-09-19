<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return response()->json($usuarios);
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
        $usuarios = new User();
        $usuario->name = $request->usu_nam;
        $usuario->email = $usuario->usu_ema;
        $usuario->password = $request->usu_pwd;
        $usuario->usu_ape = $request->usu_ape;
        $usuario->usu_sex = $request->usu_sex;
        $usuario->usu_fna = $request->usu_fna;
        $usuario->usu_cel = $request->usu_cel;
        $usuario->usu_fre = $request->usu_fre;
        $usuario->usu_tip = $request->usu_tip;
        $usuario->usu_fto = $request->usu_fto;
        $usuario->usu_est = $request->usu_est;
        $usuario->save();
        return response()->json($usuario);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
         return response()->json($usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        $usuario->name = $request->usu_nam;
        $usuario->email = $usuario->usu_ema;
        $usuario->password = $request->usu_pwd;
        $usuario->usu_ape = $request->usu_ape;
        $usuario->usu_sex = $request->usu_sex;
        $usuario->usu_fna = $request->usu_fna;
        $usuario->usu_cel = $request->usu_cel;
        $usuario->usu_fre = $request->usu_fre;
        $usuario->usu_tip = $request->usu_tip;
        $usuario->usu_fto = $request->usu_fto;
        $usuario->usu_est = $request->usu_est;
        $usuario->save();
        return response()->json($usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        $usuario->delele();
    }
}
