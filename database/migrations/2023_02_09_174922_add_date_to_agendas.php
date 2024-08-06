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
            $table->timestamp("fecha_hora")->after("hora");
            $table->timestamp("fecha_hora_inicio")->after("fecha_hora")->nullable();
            $table->timestamp("fecha_hora_fin")->after("fecha_hora_inicio")->nullable();
        });

        $agendas = \App\Models\Agenda::all();
        foreach ($agendas as $item) {
            !is_null($item->inicio) ? $inicio = $item->inicio : $inicio = null;
            !is_null($item->fin) ? $fin = $item->fin : $fin = null;
            $item->update([
                "fecha_hora" => $item->fecha . " " . $item->hora,
                "fecha_hora_inicio" => $inicio,
                "fecha_hora_fin" => $fin,
            ]);
        }

        Schema::table('agendas', function (Blueprint $table) {
            $table->dropColumn("fecha");
            $table->dropColumn("hora");
            $table->dropColumn("inicio");
            $table->dropColumn("fin");
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
            $table->dropColumn("fecha_hora");
            $table->dropColumn("fecha_hora_inicio");
            $table->dropColumn("fecha_hora_fin");
            $table->date("fecha")->nullable()->after("id");
            $table->date("hora")->nullable()->after("fecha");
            $table->date("inicio")->nullable()->after("hora");
            $table->date("fin")->nullable()->after("inicio");
        });
    }
};
