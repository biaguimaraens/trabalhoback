<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Consulta;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Consulta::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $consulta = new Consulta;
      $consulta->sala = $request->sala;
      $consulta->endereco = $request->endereco;
      $consulta->horario = $request->horario;
      $consulta->data = $request->data;
      $consulta->idPaciente = $request->idPaciente;
      $consulta->idMedico = $request->idMedico;
      $consulta->save();
      return response()->json([$consulta]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $consulta = Consulta::findOrFail($id);
      return response()->json([$consulta]);
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
      $consulta = Consulta::findOrFail($id);
      if($request->sala)
        $consulta->sala = $request->sala;
      if($request->endereco)
        $consulta->endereco = $request->endereco;
      if($request->horario)
        $consulta->horario = $request->horario;
      if($request->data)
        $consulta->data = $request->data;
      if($request->idPaciente)
        $consulta->idPaciente = $request->idPaciente;
      if($request->idMedico)
        $consulta->idMedico = $request->idMedico;
      return response()->json([$consulta]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Consulta::destroy($id);
      return response()->json(['DELETADO']);
    }
}
