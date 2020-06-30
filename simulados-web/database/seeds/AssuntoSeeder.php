<?php

use App\Entities\Assunto;
use Illuminate\Database\Seeder;

class AssuntoSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new Assunto())->salvarRecursive($this->getAssuntos());
    }

    private function getAssuntos()
    {
        return [
            [
                'assdescricao' => 'Português',
                'filhos' => [
                    [
                        'assdescricao' => 'Ortografia',
                        'filhos' => [
                            ['assdescricao' => 'Grafia e Emprego de Iniciais Maiúsculas'],
                            ['assdescricao' => 'Patrimônios e Homônimos'],
                        ]
                    ],
                    [
                        'assdescricao' => 'Morfologia',
                        'filhos' => [
                            ['assdescricao' => 'Morfologia - Pronomes'],
                            ['assdescricao' => 'Morfologia - Verbos'],
                        ]
                    ],
                    ['assdescricao' => 'Artigos'],
                    ['assdescricao' => 'Numerais'],
                ]
            ],
            [
                'assdescricao' => 'Raciocínio Lógico - RLM',
                'filhos' => [
                    ['assdescricao' => 'Proposições Simples e Compostas'],
                    ['assdescricao' => 'Análise Combinatória'],
                    ['assdescricao' => 'Probabilidade'],
                ]
            ],
            [
                'assdescricao' => 'Noções de Informática',
                'filhos' => [
                    ['assdescricao' => 'Sistema Operacional'],
                    ['assdescricao' => 'Pacote de Aplicativos'],
                    ['assdescricao' => 'Softwares'],
                ],
            ],
            [
                'assdescricao' => 'Segurança da Informação',
                'filhos' => [
                    ['assdescricao' => 'Assinatura Digital'],
                    ['assdescricao' => 'Ataques e ameaças'],
                    ['assdescricao' => 'Backup'],
                ],
            ],
        ];
    }
}
