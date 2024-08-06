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
        Schema::dropIfExists('sesion_eventos');
        Schema::create('sesion_agendas', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("sesiones_id");
            $table->foreign("sesiones_id")->on("sesiones")->references("id");
            $table->uuid("agenda_id");
            $table->foreign("agenda_id")->on("agendas")->references("id");
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
        Schema::dropIfExists('sesion_agendas');
        Schema::create('sesion_eventos', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("sesion_id");
            $table->foreign("sesion_id")->on("sesiones")->references("id");
            $table->uuid("evento_id");
            $table->foreign("evento_id")->on("agendas")->references("id");
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
