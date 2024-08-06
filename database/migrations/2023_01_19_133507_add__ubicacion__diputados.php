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
        Schema::table('diputados', function (Blueprint $table) {
            $table->longText("ubicacion")->after("instagram");
            $table->string("link_web")->after("ubicacion");
            $table->string("telefono")->after("link_web");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diputados', function (Blueprint $table) {
            $table->dropIfExists("ubicacion");
            $table->dropIfExists("link_web");
            $table->dropIfExists("telefono");
        });
    }
};
