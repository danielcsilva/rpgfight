<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateTipoJogadorsTable.
 */
class CreateTipoJogadorsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('tb_tipo_jogador', function(Blueprint $table){

            $table->increments('id_tipo_jogador');
            $table->string('nm_tipo_jogador',250);
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
		Schema::drop('tb_tipo_jogador');
	}
}
