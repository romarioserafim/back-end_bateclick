<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class DefeitoResource extends JsonResource
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
            "id" => $this->id,
            "veiculo_id" => $this->veiculo_id,
            "descricao_defeito" => $this->descricao_defeito,
            "data_criacao" => Carbon::parse($this->created_at)->format('Y-m-d h:i:s'),
        ];
    }
}
