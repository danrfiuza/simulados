<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assunto extends Model
{
    use SoftDeletes;

    protected $table = 'assunto';
    protected $fillable = [
        'assdescricao',
    ];
    protected $primaryKey = 'assid';
    protected  $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];
    protected $hidden = [
        '_token',
        'updated_at',
        'created_at',
        'deleted_at'
    ];
    public $timestamps = true;

    private static $arParamQuestoes = [];


    /**
     * @return array
     */
    public static function getArParamQuestoes(): array
    {
        return self::$arParamQuestoes;
    }

    /**
     * Chamada estática para poder atribuir os mesmos filtros a todos os itens da árvore
     * @param array $arParamQuestoes
     */
    public static function setArParamQuestoes(array $arParamQuestoes): void
    {
        self::$arParamQuestoes = $arParamQuestoes;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function questoes()
    {
        $questoes = $this->hasMany(
            Questao::class,
            'assid',
            'assid'
        );
        $questoes->where(self::getArParamQuestoes());
        return $questoes;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function children()
    {
        return $this->belongsToMany(
            'assidpai',
            Assunto::class,
            'assid'
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assuntos()
    {
        return $this->hasMany(
            Assunto::class,
            'assidpai',
            'assid'
        )
        ->withCount('questoes')
        ->with('questoes');
    }

    // This is method where we implement recursive relationship
    public function childAssuntos()
    {
        return $this->hasMany(
            Assunto::class,
            'assidpai',
            'assid'
        )
        ->with('assuntos')
        ->withCount('questoes')
        ->with('questoes');
    }

    /**
     * @return \Illuminate\Database\Query\Builder
     */
    public function scopeAssuntoPai()
    {
        return $this->whereNull('assidpai');
    }

    /**
     * @return \Illuminate\Database\Query\Builder
     */
    public function getArvore()
    {
        return $this
            ->assuntoPai()
            ->with('childAssuntos');
    }

    public function salvarRecursive($assuntos = [],$assidpai = null)
    {
        foreach($assuntos as $assunto) {
            $assuntosFilhos = [];

            if(array_key_exists('filhos',$assunto)){
                $assuntosFilhos = $assunto['filhos'];
                unset($assunto['filhos']);
            }

            if($assidpai) {
                $assunto['assidpai'] = $assidpai;
            }
            $assidpaiNovo = $this::firstOrCreate($assunto)->assid;
            if($assuntosFilhos) {
                $this->salvarRecursive($assuntosFilhos,$assidpaiNovo);
            }
        }
    }
}

