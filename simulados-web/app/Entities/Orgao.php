<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orgao extends Model
{
    use SoftDeletes;

    protected $table = 'orgao';
    protected $fillable = [
        'orgid',
        'orgdescricao',
        'orgsigla'
    ];
    protected $primaryKey = 'orgid';
    protected  $dates = ['deleted_at'];
    protected $hidden = [
        '_token',
        'updated_at',
        'created_at',
        'deleted_at'
    ];
    public $timestamps = true;
}
