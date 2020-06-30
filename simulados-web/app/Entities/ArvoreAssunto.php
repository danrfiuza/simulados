<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ArvoreAssunto extends Model
{

    /**
     * @param Orgao $orgao
     * @param Banca $banca
     *
     * @return Collection|null
     */
    public function buscarArvoreAssuntosPorOrgaoBanca($orgid,$banid): ? Collection
    {
        $arQuery = [
            ['orgid',$orgid],
            ['banid',$banid]
        ];
        $mAssunto = new Assunto();
        $mAssunto::setArParamQuestoes($arQuery);
        return $mAssunto->getArvore()->get();
    }
}
