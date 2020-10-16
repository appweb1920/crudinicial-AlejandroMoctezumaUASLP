<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reciclaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reciclaje', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_basura', 100);
            $table->string('direccion', 100);
            $table->time('apertura', 0);
            $table->time('cierre', 0);
            $table->softDeletes();
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
        Schema::dropIfExists('reciclaje');
    }
}
