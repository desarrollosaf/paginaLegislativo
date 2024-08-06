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
        Schema::create('descripcione_comunicados', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->longText("bullets");
            $table->uuid("comunicado_id");
            $table->foreign("comunicado_id")->references("id")->on("comunicados");
            $table->integer("orden");
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
        Schema::dropIfExists('descripciones_comunicados');
    }
};
