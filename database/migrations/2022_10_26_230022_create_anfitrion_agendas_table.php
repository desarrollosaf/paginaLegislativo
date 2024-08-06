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
        Schema::create('anfitrion_agendas', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("agenda_id");
            $table->foreign("agenda_id")->references("id")->on("agendas");
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
        Schema::dropIfExists('anfitrion_agendas');
    }
};
