<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class VeiculoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'modelo' => $this->modelo,
            'fabricante' => $this->fabricante,
            'ano' => $this->ano,
            'preco' => $this->preco,
            'defeito' => $this->defeito,
        ];
    }
}
