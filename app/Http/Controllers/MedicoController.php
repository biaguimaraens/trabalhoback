<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Medico;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Medico::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $medico = new Medico;
      $medico->telefone = $request->telefone;
      $medico->dataDeNascimento = $request->dataDeNascimento;
      $medico->nome = $request->nome;
      $medico->cpf = $request->cpf;
      $medico->endereco = $request->endereco;
      $medico->tipoDeEspecializacao = $request->tipoDeEspecializacao;
      $medico->numeroCRM = $request->numeroCRM;
      $medico->save();
      return response()->json([$medico]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $medico = Medico::findOrFail($id);
      return response()->json([$medico]);
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
      $medico = Medico::findOrFail($id);
      if($request->telefone)
        $medico->telefone = $request->telefone;
      if($request->dataDeNascimento)
        $medico->dataDeNascimento = $request->dataDeNascimento;
      if($request->nome)
        $medico->nome = $request->nome;
      if($request->cpf)
        $medico->cpf = $request->cpf;
      if($request->endereco)
        $medico->endereco = $request->endereco;
      if($request->tipoDeEspecializacao)
        $medico->tipoDeEspecializacao = $request->tipoDeEspecializacao;
      if($request->numeroCRM)
        $medico->numeroCRM = $request->numeroCRM;
      return response()->json([$medico]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Medico::destroy($id);
      return response()->json(['DELETADO']);
    }
}
