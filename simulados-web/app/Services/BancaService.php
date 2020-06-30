<?php

namespace App\Services;


use App\Entities\Banca;
use Illuminate\Support\Collection;

class BancaService
{
    protected $banca;
    public function __construct(Banca $banca)
    {
        $this->banca = $banca;
    }

    public function listarBancas(): ? Collection
    {
        return $this->banca->all();
    }
}
