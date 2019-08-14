<?php

use Illuminate\Database\Seeder;

class HabilidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_habilidade')->insert(
            [
                'forca'                 =>1,
                'agilidade'             =>2,
                'id_jogador'            =>1
            ]);
        $this->command->info('Habilidade cadastrada com sucesso');

        DB::table('tb_habilidade')->insert(
            [
                'forca'                 =>2,
                'agilidade'             =>0,
                'id_jogador'            =>2
            ]);
        $this->command->info('Habilidade cadastrada com sucesso');
    }
}
