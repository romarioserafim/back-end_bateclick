<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('defeito', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('veiculo_id')->constrained('veiculo')->onDelete('cascade');
            $table->string('descricao_defeito');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('defeitos');
    }
};
