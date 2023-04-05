<?php

namespace App\Service;
use App\Http\Resources\VeiculoResource;
use App\Models\Veiculo;
use Illuminate\Http\Response;

class VeiculoService extends ServiceBase
{
    public static function createVeiculo($dataSet)
    {
        return Veiculo::firstOrCreate([
            'modelo' => $dataSet['modelo'],
            'fabricante' => $dataSet['fabricante'],
            'ano' => $dataSet['ano']
        ], [
            'preco' => $dataSet['preco']
        ]);
    }

    public function store($dataSet)
    {
        $veiculo = $this->createVeiculo($dataSet);
        return new VeiculoResource($veiculo);
    }

    public function update($id, $dataSet)
    {
        $veiculo = Veiculo::find($id);
        $veiculo->modelo = $dataSet['modelo'];
        $veiculo->fabricante = $dataSet['fabricante'];
        $veiculo->ano = $dataSet['ano'];
        $veiculo->preco = $dataSet['preco'];
        $veiculo->save();

        return new VeiculoResource($veiculo);
    }

    public function findAll()
    {
        $veiculos = Veiculo::with('defeito:id,created_at,veiculo_id,descricao_defeito')->get();
        return  VeiculoResource::collection($veiculos);
    }

    public function delete($id)
    {
        $veiculo = Veiculo::find($id);
        $veiculo->delete();
        return  response()->json(['data'=> ['msg'=>'veículo deletado', 'code'=> Response::HTTP_OK]]);
    }


}
