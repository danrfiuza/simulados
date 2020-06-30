<?php

use App\Entities\Assunto;
use App\Entities\Banca;
use App\Entities\Orgao;
use App\Entities\Questao;
use Illuminate\Database\Seeder;

class QuestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getQuestoes() as $questao) {
            Questao::firstOrCreate([
                'quedescricao' => $questao['quedescricao'],
                'orgid' => Orgao::firstOrCreate(['orgsigla' => $questao['orgsigla']])->orgid,
                'banid' => Banca::firstOrCreate(['bandescricao' => $questao['bandescricao']])->banid,
                'assid' => Assunto::firstOrCreate(['assdescricao' => $questao['assdescricao']])->assid,
            ]);
        }
    }

    private function getQuestoes()
    {
        return [
            [
                'quedescricao' => 'Mauris aliquam eros nec leo egestas, luctus pulvinar dolor sollicitudin. Curabitur nisi ex, congue eu iaculis ut, vehicula gravida felis.',
                'orgsigla' => 'PF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'Mauris aliquam eros nec leo egestas, luctus pulvinar dolor sollicitudin. Curabitur nisi ex, congue eu iaculis ut, vehicula gravida felis.',
                'orgsigla' => 'PF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Verbos',
            ],
            [
                'quedescricao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'orgsigla' => 'PF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Pronomes',

            ],
            [
                'quedescricao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'orgsigla' => 'PF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Pronomes',
            ],
            [
                'quedescricao' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'orgsigla' => 'PF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'orgsigla' => 'PF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Verbos',
            ],
            [
                'quedescricao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'orgsigla' => 'PF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Pronomes',

            ],
            [
                'quedescricao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'orgsigla' => 'PF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Pronomes',
            ],

            [
                'quedescricao' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'orgsigla' => 'PF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'orgsigla' => 'PF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'orgsigla' => 'PF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Verbos',
            ],
            [
                'quedescricao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'orgsigla' => 'PF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Pronomes',

            ],
            [
                'quedescricao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'orgsigla' => 'PF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Pronomes',
            ],



            [
                'quedescricao' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia',

            ],
            [
                'quedescricao' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia',
            ],
            [
                'quedescricao' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Verbos',
            ],
            [
                'quedescricao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Pronomes',

            ],
            [
                'quedescricao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Pronomes',
            ],


            [
                'quedescricao' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia',

            ],
            [
                'quedescricao' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia',
            ],
            [
                'quedescricao' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Verbos',
            ],
            [
                'quedescricao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Pronomes',

            ],
            [
                'quedescricao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Pronomes',
            ],


            [
                'quedescricao' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia',

            ],
            [
                'quedescricao' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia',
            ],
            [
                'quedescricao' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Verbos',
            ],
            [
                'quedescricao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Pronomes',

            ],
            [
                'quedescricao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Pronomes',
            ],
            [
                'quedescricao' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'orgsigla' => 'TCU',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'orgsigla' => 'TCU',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Verbos',
            ],
            [
                'quedescricao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'orgsigla' => 'TCU',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Pronomes',

            ],
            [
                'quedescricao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'orgsigla' => 'TCU',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Pronomes',
            ],
            [
                'quedescricao' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'orgsigla' => 'TCU',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'orgsigla' => 'TCU',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Verbos',
            ],
            [
                'quedescricao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'orgsigla' => 'TCU',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Pronomes',

            ],
            [
                'quedescricao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'orgsigla' => 'TCU',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Pronomes',
            ],
            [
                'quedescricao' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'orgsigla' => 'TCU',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'orgsigla' => 'TCU',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Verbos',
            ],
            [
                'quedescricao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'orgsigla' => 'TCU',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Pronomes',

            ],
            [
                'quedescricao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'orgsigla' => 'TCU',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Pronomes',
            ],
            [
                'quedescricao' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'orgsigla' => 'SF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'orgsigla' => 'SF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Verbos',
            ],
            [
                'quedescricao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'orgsigla' => 'SF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Pronomes',

            ],
            [
                'quedescricao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'orgsigla' => 'SF',
                'bandescricao' => 'CESPE',
                'assdescricao' => 'Morfologia - Pronomes',
            ],

            [
                'quedescricao' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'orgsigla' => 'SF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'orgsigla' => 'SF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Verbos',
            ],
            [
                'quedescricao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'orgsigla' => 'SF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Pronomes',

            ],
            [
                'quedescricao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'orgsigla' => 'SF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Morfologia - Pronomes',
            ],
            [
                'quedescricao' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'orgsigla' => 'SF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Verbos',

            ],
            [
                'quedescricao' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'orgsigla' => 'SF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Verbos',
            ],
            [
                'quedescricao' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'orgsigla' => 'SF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Pronomes',

            ],
            [
                'quedescricao' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'orgsigla' => 'SF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Morfologia - Pronomes',
            ],
            [
                'quedescricao' => 'Fusce a semper tortor, vitae ultrices ipsum. Mauris aliquam eros nec leo egestas, luctus pulvinar dolor sollicitudin. ',
                'orgsigla' => 'SF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Ataques e ameaças',
            ],
            [
                'quedescricao' => 'Donec ultricies, orci et sagittis placerat, turpis diam molestie neque, sodales volutpat purus tortor et ligula.',
                'orgsigla' => 'SF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Ataques e ameaças',
            ],
            [
                'quedescricao' => 'Vivamus eleifend leo dui, nec finibus felis tempus eget. Duis tellus nisi, feugiat at quam vel, tempus dapibus lectus. Nam eget lobortis lacus.',
                'orgsigla' => 'SF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Ataques e ameaças',
            ],
            [
                'quedescricao' => 'Proin sit amet ligula massa. Nulla facilisi. Integer rutrum lectus nec enim elementum, nec euismod neque imperdiet.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Backup',
            ],
            [
                'quedescricao' => 'Mauris aliquam eros nec leo egestas, luctus pulvinar dolor sollicitudin. Curabitur nisi ex, congue eu iaculis ut, vehicula gravida felis.',
                'orgsigla' => 'SF',
                'bandescricao' => 'ESAF',
                'assdescricao' => 'Grafia e Emprego de Iniciais Maiúsculas',
            ],
            [
                'quedescricao' => 'Nulla vel aliquet neque. Phasellus sagittis eu ante sed semper.',
                'orgsigla' => 'PC-DF',
                'bandescricao' => 'IADES',
                'assdescricao' => 'Patrimônios e Homônimos',
            ],
        ];
    }

}
