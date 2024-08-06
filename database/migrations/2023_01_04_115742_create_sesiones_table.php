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
        Schema::create('sesiones', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->date("fecha");
            $table->string("sesion");
            $table->string("legislatura");
            $table->string("asamblea");
            $table->uuid("tipo_sesion_id");
            $table->uuid("regimen_id");
            $table->uuid("anio_id");
            $table->uuid("periodo_id");
            $table->foreign("tipo_sesion_id")->on("tipo_sesions")->references("id");
            $table->foreign("regimen_id")->on("regimen_sesions")->references("id");
            $table->foreign("anio_id")->on("anio_sesions")->references("id");
            $table->foreign("periodo_id")->on("periodo_sesions")->references("id");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sesiones');
    }
};
