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
        Schema::create('decreto_iniciativa_temporals', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->date("fecha_decreto");
            $table->unsignedBigInteger("numero_decreto");
            $table->longText("nombre_decreto");
            $table->string("path")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('decreto_iniciativa_temporals');
    }
};
