<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdemProducaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordem_producaos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('code',20)->unique()->index();                     
            $table->string('description');
            $table->integer('quantity');
            $table->date('dateBegin');
            $table->date('dateEnd');
            $table->integer('priority');
            $table->integer('status');
            $table->integer('produto_id')->unsigned()->index();
            $table->integer('users_id')->unsigned()->index();
        });
        Schema::table('ordem_producaos', function (Blueprint $table) {
            $table->foreign('produto_id')->references('id')->on('processos')->onDelete('cascade');
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
        Schema::dropIfExists('ordem_producaos');
    }
}
