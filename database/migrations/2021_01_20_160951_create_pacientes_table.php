<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();

            $table->string('nome')->nullable();
            $table->date('nascimento')->nullable();
            $table->string('sexo')->nullable();
            $table->string('raca')->nullable();
            $table->string('pai')->nullable();
            $table->string('mae')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('fone')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->string('cartao')->nullable();
            $table->string('prontuario')->nullable();
            $table->string('status')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('cep')->nullable();
            $table->string('logradouro')->nullable();
            $table->string('descricao', 500)->nullable();
            $table->string('numero')->nullable();
            $table->string('complemento', 500)->nullable();

            $table->bigInteger('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');

            $table->bigInteger('microarea_id')->unsigned();
            $table->foreign('microarea_id')->references('id')->on('microareas')->onDelete('cascade');

            $table->bigInteger('comunidade_id')->unsigned();
            $table->foreign('comunidade_id')->references('id')->on('comunidades')->onDelete('cascade');

            $table->bigInteger('familia_id')->unsigned();
            $table->foreign('familia_id')->references('id')->on('familias')->onDelete('cascade');

            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('pacientes');
    }
}
