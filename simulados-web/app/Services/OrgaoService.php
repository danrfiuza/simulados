<?php

namespace App\Services;


use App\Entities\Orgao;
use Illuminate\Support\Collection;

class OrgaoService
{
    protected $orgao;
    public function __construct(Orgao $orgao)
    {
        $this->orgao = $orgao;
    }

    public function listarOrgaos(): ? Collection
    {
        return $this->orgao->all();
    }
}
