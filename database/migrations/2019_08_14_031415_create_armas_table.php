<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateArmasTable.
 */
class CreateArmasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_arma', function(Blueprint $table) {
            $table->increments('id_arma');
            $table->string('nm_arma',200)->nullable();
            $table->integer('ataque')->nullable();
            $table->integer('defesa')->nullable();
            $table->integer('dado')->nullable();
            $table->integer('id_jogador')->unsigned()->nullable();
            $table->foreign('id_jogador')->references('id_jogador')->on('tb_jogador');
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
		Schema::drop('tb_arma');
	}
}
