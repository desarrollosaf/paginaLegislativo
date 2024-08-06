<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::dropIfExists('boletin_sesion');
        Schema::create('sesion_comunicados', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("sesiones_id");
            $table->foreign("sesiones_id")->on("sesiones")->references("id");
            $table->uuid("comunicado_id");
            $table->foreign("comunicado_id")->on("comunicados")->references("id");
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
        Schema::dropIfExists('sesion_comunicados');
        Schema::create('boletin_sesion', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("sesion_id");
            $table->foreign("sesion_id")->on("sesiones")->references("id");
            $table->uuid("boletin_id");
            $table->foreign("boletin_id")->on("comunicados")->references("id");
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
