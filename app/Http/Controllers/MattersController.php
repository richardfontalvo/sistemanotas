<?php

namespace App\Http\Controllers;

use App\Models\matters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MattersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = matters::all();
        return view('materias.index',compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materias = matters::all();
        return view('materias.crear',compact('materia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materia = new Matters();
        $materia->nombre = $request->nombre;
        $materia->version = $request->version;
        $materia->save();
        session()->flash("flash.banner","materia creada de forma exitosa");
        return Redirect::route('materias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\matters  $matters
     * @return \Illuminate\Http\Response
     */
    public function show(matters $materia)
    {
        return view('materias.ver', compact("materia"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\matters  $matters
     * @return \Illuminate\Http\Response
     */
    public function edit(matters $materia)
    {
        return view('materias.edit',compact("materia"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\matters  $matters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, matters $materia)
    {
        $materia->nombre= $request->namme;
        $materia->version = $request->version;
        $materia->save();
        session()->flash("flash.banner", "Materia modificado de manera satisfactoria");
        return Redirect::route('materias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\matters  $matters
     * @return \Illuminate\Http\Response
     */
    public function destroy(matters $materia)
    {
       $materia->delete();
       session()->flash("flash.banner","Materia eliminada de forma satisfactoria");
       return Redirect::route("materias.index");

    }
}
