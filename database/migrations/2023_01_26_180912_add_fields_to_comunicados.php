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
        Schema::table('agendas', function (Blueprint $table) {
            $table->boolean("transmision")->after("sede_id")->default(0);
            $table->boolean("estatus_transmision")->after("transmision")->default(0);
            $table->timestamp("inicio")->after("transmision")->nullable();
            $table->timestamp("fin")->after("transmision")->nullable();
            $table->string("liga")->after("transmision")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('agendas', function (Blueprint $table) {
            $table->dropColumn("transmision");
            $table->dropColumn("liga");
        });
    }
};
