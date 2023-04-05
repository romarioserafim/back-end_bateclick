<?php

namespace App\Providers;

use App\Models\Veiculo;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('unique_ano_modelo_fabricante', function ($attribute, $value, $parameters, $validator) {
            $veiculoExistente = Veiculo::where('modelo', $validator->getData()['modelo'])
                                ->where('fabricante', $validator->getData()['fabricante'])
                                ->where('ano', $value)
                                ->first();
            return $veiculoExistente ? false : true;
        });
    }
}
