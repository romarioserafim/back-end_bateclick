<?php

namespace App\Service;
use App\Http\Resources\DefeitoResource;
use App\Models\Defeito;
use Illuminate\Http\Response;

class DefeitoService extends ServiceBase
{

    public static function createDefeito($dataSet)
    {
        return Defeito::firstOrCreate([
            'veiculo_id' => $dataSet['idVeiculo'],
            'descricao_defeito' => $dataSet['descricao_defeito'],
        ]);
    }


    public function store($dataSet)
    {
        $defeito = $this->createDefeito($dataSet);
        return new DefeitoResource($defeito);
    }

    public function update($id, $dataSet)
    {
        $defeito = Defeito::find($id);

        $defeito->veiculo_id = $dataSet['idVeiculo'];
        $defeito->descricao_defeito = $dataSet['descricao_defeito'];
        $defeito->save();

        return new DefeitoResource($defeito);
    }

    public function delete($id)
    {
        $defeito = Defeito::find($id);

        $defeito->delete();

        return response()->json(['data'=> ['msg'=>'defeito deletado', 'code'=> Response::HTTP_OK]]);
    }

}
