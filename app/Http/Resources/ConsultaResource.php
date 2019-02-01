<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Consulta;

class ConsultaResource extends JsonResource
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
        'sala' => $this->sala,
        'endereco' => $this->enderecp,
        'horario' => $this->horario,
        'data' => $this->data,
        'created_at' => $this->created_at,
        'updated_at' => $this->updated_at,
      ];
    }
}
