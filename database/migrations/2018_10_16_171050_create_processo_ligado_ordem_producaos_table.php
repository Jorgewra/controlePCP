<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessoLigadoOrdemProducaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processo_ligado_ordem_producaos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('status');
            $table->string('flow');
            $table->integer('produced');
            $table->integer('ordem_producaos_id')->unsigned()->index();
            $table->integer('processos_id')->unsigned()->index();
            $table->integer('users_id')->unsigned()->index();

        });
       
        Schema::table('processo_ligado_ordem_producaos', function (Blueprint $table) {
            $table->foreign('processos_id')->references('id')->on('processos')->onDelete('cascade');
            $table->foreign('ordem_producaos_id')->references('id')->on('ordem_producaos')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processo_ligado_ordem_producaos');
    }
}
