<?php

use Illuminate\Database\Seeder;

class JogadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_jogador')->insert(
            [
                'id_jogador'            => 1,
                'nm_jogador'            =>'Vagalume Verde',
                'vida'                  =>12,
                'id_tipo_jogador'       =>1,
            ]);
        $this->command->info('Jogador cadastrado com sucesso');

        DB::table('tb_jogador')->insert(
            [
                'id_jogador'            => 2,
                'nm_jogador'            =>'Orc de Mesquita',
                'vida'                  =>20,
                'id_tipo_jogador'       =>2,
            ]);
        $this->command->info('Jogador cadastrado com sucesso');

    }
}
