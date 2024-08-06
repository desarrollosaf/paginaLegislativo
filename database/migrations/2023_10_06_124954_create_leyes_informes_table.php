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
        Schema::create('leyes_informes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->longText("bullets");
            $table->uuid("informes_id");
            $table->foreign("informes_id")->references("id")->on("informes");
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
        Schema::dropIfExists('leyes_informes');
    }
};
