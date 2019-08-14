<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateJogadorsTable.
 */
class CreateJogadorsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_jogador', function(Blueprint $table) {
            $table->increments('id_jogador');
            $table->string('nm_jogador');
            $table->string('vida');
            $table->integer('id_tipo_jogador')->unsigned()->nullable();
            $table->foreign('id_tipo_jogador')->references('id_tipo_jogador')->on('tb_tipo_jogador');
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
		Schema::drop('tb_jogador');
	}
}
