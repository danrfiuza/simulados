<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Questao extends Model
{
    use SoftDeletes;

    protected $table = 'questao';
    protected $fillable = [
        'quedescricao',
        'banid',
        'assid',
        'orgid',
        'queid'
    ];
    protected $primaryKey = 'queid';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    protected $hidden = [
        '_token',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    public $timestamps = true;

    public function scopeQuestoesOrgaoBanca($orgid,$banid)
    {
        $this->where([
            ['orgid',$orgid],
            ['banid',$banid]
        ]);
    }

    public function listarQuestoesPorOrgaoBancaAssunto($orgao,$banca,$assunto)
    {
        return $this
            ->where('orgid',$orgao)
            ->where('banid',$banca)
            ->where('assid',$assunto);
    }
}
