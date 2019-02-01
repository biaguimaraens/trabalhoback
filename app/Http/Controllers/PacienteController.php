<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Paciente;

use App\Http\Resources\PacienteResource;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Paciente::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $paciente = new Paciente;
      $paciente->telefone = $request->telefone;
      $paciente->dataDeNascimento = $request->dataDeNascimento;
      $paciente->nome = $request->nome;
      $paciente->cpf = $request->cpf;
      $paciente->endereco = $request->endereco;
      $paciente->numeroDoPlano = $request->numeroDoPlano;
      $paciente->save();
      return new PacienteResource($paciente);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $paciente = Medico::findOrFail($id);
      return response()->json([$paciente]);
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
      $paciente = Paciente::findOrFail($id);
      if($request->telefone)
        $paciente->telefone = $request->telefone;
      if($request->dataDeNascimento)
        $paciente->dataDeNascimento = $request->dataDeNascimento;
      if($request->nome)
        $paciente->nome = $request->nome;
      if($request->cpf)
        $paciente->cpf = $request->cpf;
      if($request->endereco)
        $paciente->endereco = $request->endereco;
      if($request->numeroDoPlano)
        $paciente->numeroDoPlano = $request->numeroDoPlano;
      $paciente->save();
      return new PacienteResource($paciente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Paciente::destroy($id);
      return response()->json(['DELETADO']);
    }
}
