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
        Schema::create('movimientos_diputados', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->date("fecha_movimiento");
            $table->uuid("diputado_id");
            $table->uuid("estatus_diputado_id");
            $table->foreign("diputado_id")->on("diputados")->references("id");
            $table->foreign("estatus_diputado_id")->on("estatus_diputados")->references("id");
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
        Schema::dropIfExists('movimientos_diputados');
    }
};
