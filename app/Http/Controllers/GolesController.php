<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gol;
use Response;


class GolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goles = Gol::all();
        return $goles;
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
        Gol::create($input);
        return Response::json(array(
            'success' => true,
            'mensaje' => 'goles guardados'
        ), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_partido)
    {
        //
        $goles = Gol::find($id_partido);
        return $goles;
    }

    public function goles_partido($id_partido){
        $gol_partido= Gol::where('id_partido', $id_partido)->get();
        return Response::json(array( 
            'goles_partido'=>$gol_partido
        ), 200);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gol = Gol::find($id);
        $gol->delete();
        return Response::json(array(
            'success' => true,
            'mensaje'=> 'Gol eliminado'
        ), 200);
    }
}
