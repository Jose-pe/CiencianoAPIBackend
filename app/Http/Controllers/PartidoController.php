<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partido;
use Response;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allmatchs(){
        $partidos = Partido::orderBy('fecha', 'desc')->paginate(10);
        return $partidos;
    }
    public function index()
    {
        //
        $partidos = Partido::orderBy('fecha', 'desc')->paginate(4);
        return $partidos;
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
        //
        $input = $request->all();
        Partido::create($input);
        return Response::json(array(
            'success'=>true,
            'mensaje' => 'Se Guardaron los datos'
        ), 200);
        //return "Partido Guardado";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $partido = Partido::find($id);
        return $partido;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partido = Partido::find($id);
        return $partido;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input =  $request->all();
        $partido = Partido::find($id);
        $partido->update($input);
        //return "Partido actualizado exitosamente";
        return Response::json(array(
            'success'=>true,
            'mensaje' => 'Partido actualizado exitosamente'
        ), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $partido = Partido::find($id);
        $partido->delete();
        return Response::json(array(
            'success'=>true,
            'mensaje' => 'Partido Eliminado'
        ), 200);
        //return ("Partido Eliminado");
    }

    public function mostrarstats($temporada){
        
    }
}
