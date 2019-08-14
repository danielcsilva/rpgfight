<?php

use Illuminate\Database\Seeder;

class TipoJogadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_tipo_jogador')->insert(
            [
                'id_tipo_jogador'   => 1,
                'nm_tipo_jogador'    =>'Humano'
            ]);
        $this->command->info('Tipo jogador cadastrado com sucesso');


        DB::table('tb_tipo_jogador')->insert(
            [
                'id_tipo_jogador'   => 2,
                'nm_tipo_jogador'    =>'Orc'
            ]);
        $this->command->info('Tipo jogador cadastrado com sucesso');
    }
}
