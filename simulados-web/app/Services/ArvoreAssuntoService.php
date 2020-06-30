<?php
/**
 * Created by PhpStorm.
 * User: fiuza
 * Date: 27/06/20
 * Time: 16:45
 */

namespace App\Services;


use App\Entities\ArvoreAssunto;
use App\Entities\Banca;
use App\Entities\Orgao;
use Illuminate\Support\Collection;

class ArvoreAssuntoService
{
    protected $arvoreAssunto;
    public function __construct(ArvoreAssunto $arvoreAssunto)
    {
        $this->arvoreAssunto = $arvoreAssunto;
    }

    public function buscarArvoreAssuntosPorOrgaoBanca($orgid,$banid): ? Collection
    {
        return $this->arvoreAssunto->buscarArvoreAssuntosPorOrgaoBanca($orgid,$banid);
    }
}
