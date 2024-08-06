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
        Schema::create('informes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid("integrante_legislatura_id");
            $table->foreign("integrante_legislatura_id")->on("integrante_legislaturas")->references("id");
            $table->longText("path");
            $table->longText("foto_principal");
            $table->longText("foto_ficha");
            $table->longText("foto_descarga");
            $table->string("liga")->nullable();
            $table->date("fecha_inter")->nullable();
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
        Schema::dropIfExists('informes');
    }
};
