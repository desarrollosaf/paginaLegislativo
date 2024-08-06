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
        Schema::create('diputadas', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("integrante_legislatura_id");
            $table->string("descripcion")->nullable();
            $table->longText("short_images")->nullable();
            $table->longText("images")->nullable();
            $table->foreign("integrante_legislatura_id")->on("integrante_legislaturas")->references("id");
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
        Schema::dropIfExists('diputadas');
    }
};
