<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Paciente;

class PacienteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
      return [
        'nome' => $this->nome,
        'telefone' => $this->telefone,
        'cpf' => $this->cpf,
        'numeroDoPlano' => $this->cpf,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
      ];
    }
}
