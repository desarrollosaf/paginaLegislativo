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
        Schema::create('autores_comunicados', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("comunicado_id");
            $table->foreign("comunicado_id")->references("id")->on("comunicados");
            $table->uuid("tipo_autor_id");
            $table->uuid("autor_id");
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
        Schema::dropIfExists('autores_comunicados');
    }
};
