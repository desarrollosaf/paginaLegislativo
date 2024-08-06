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
        Schema::table('sesiones', function (Blueprint $table) {
            $table->longText("path_acta")->after("tipo_asamblea_id")->nullable();
            $table->longText("path_orden")->after("path_acta")->nullable();
            $table->longText("path_estenografia")->after("path_orden")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sesiones', function (Blueprint $table) {
            $table->dropColumn("path_acta");
            $table->dropColumn("path_orden");
            $table->dropColumn("path_estenografia");
        });
    }
};
