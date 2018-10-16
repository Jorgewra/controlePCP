<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFluxoProcessosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fluxo_processos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');            
            $table->string('description')->nullable();
            $table->integer('processo_id')->unsigned()->index();
            $table->integer('users_id')->unsigned()->index();
            $table->integer('status');
        });
        Schema::table('fluxo_processos', function (Blueprint $table) {
            $table->foreign('processo_id')->references('id')->on('processos')->onDelete('cascade');
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
        Schema::dropIfExists('fluxo_processos');
    }
}
