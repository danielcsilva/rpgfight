<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateHabilidadesTable.
 */
class CreateHabilidadesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tb_habilidade', function(Blueprint $table) {
            $table->increments('id_habilidade');
            $table->integer('forca')->nullable();
            $table->integer('agilidade')->nullable();
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
		Schema::drop('tb_habilidade');
	}
}
