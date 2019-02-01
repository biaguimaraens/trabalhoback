<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Medico;

class MedicoResource extends JsonResource
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
        'tipoDeEspecializacao' => $this->tipoDeEspecializacao,
        'numeroCRM' => $this->numeroCRM,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
      ];
    }
}
