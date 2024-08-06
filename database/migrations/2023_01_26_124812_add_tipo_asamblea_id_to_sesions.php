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
        Schema::table('sesiones', function (Blueprint $table) {
            $table->uuid("tipo_asamblea_id")->after("periodo_id")->nullable();
            $table->foreign("tipo_asamblea_id")->on("tipo_asambleas")->references("id");
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
            $table->dropForeign("tipo_asamblea_id");
            $table->dropColumn("tipo_asamblea_id");
        });
    }
};
