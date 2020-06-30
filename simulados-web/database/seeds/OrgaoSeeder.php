<?php

use App\Entities\Orgao;
use Illuminate\Database\Seeder;

class OrgaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getOrgaos() as $orgao) {
            Orgao::firstOrCreate($orgao);
        }
    }

    private function getOrgaos()
    {
        return [
            [
                'orgdescricao' => 'Polícia Federal',
                'orgsigla' => 'PF'
            ],
            [
                'orgdescricao' => 'Polícia Civil do Distrito Federal',
                'orgsigla' => 'PC-DF'
            ],
            [
                'orgdescricao' => 'Tribunal de Contas da União',
                'orgsigla' => 'TCU'
            ],
            [
                'orgdescricao' => 'Senado Federal',
                'orgsigla' => 'SF'
            ],
        ];
    }
}
