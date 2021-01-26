<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->id();

            $table->string('numero')->nullable();
            $table->string('status')->nullable();

            $table->bigInteger('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');

            $table->bigInteger('microarea_id')->unsigned();
            $table->foreign('microarea_id')->references('id')->on('microareas')->onDelete('cascade');

            $table->bigInteger('comunidade_id')->unsigned();
            $table->foreign('comunidade_id')->references('id')->on('comunidades')->onDelete('cascade');

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
        Schema::dropIfExists('familias');
    }
}
