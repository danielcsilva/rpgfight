<?php

use Illuminate\Database\Seeder;

class ArmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_arma')->insert(
            [
                'nm_arma'               =>'Espada Longa de Cristal',
                'ataque'                =>2,
                'defesa'                =>1,
                'dado'                  =>6,
                'id_jogador'            =>1
            ]);
        $this->command->info('Arma cadastrada com sucesso');

        DB::table('tb_arma')->insert(
            [
                'nm_arma'               =>'Clava de Madeira',
                'ataque'                =>1,
                'defesa'                =>0,
                'dado'                  =>8,
                'id_jogador'            =>2
            ]);
        $this->command->info('Arma cadastrada com sucesso');
    }
}
