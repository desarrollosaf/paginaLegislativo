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
        Schema::create('acuerdo_iniciativas', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("iniciativa_id");
            $table->foreign("iniciativa_id")->references("id")->on("iniciativas");
            $table->date("fecha_acuerdo");
            $table->longText("nombre_acuerdo");
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
        Schema::dropIfExists('acuerdo_iniciativas');
    }
};
