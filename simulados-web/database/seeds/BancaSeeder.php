<?php

use App\Entities\Banca;
use Illuminate\Database\Seeder;

class BancaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getBancas() as $banca) {
            Banca::firstOrCreate($banca);
        }
    }

    private function getBancas()
    {
        return [
            ['bandescricao' => 'CESPE'],
            ['bandescricao' => 'IADES'],
            ['bandescricao' => 'ESAF'],
        ];
    }
}
