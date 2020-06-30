<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banca extends Model
{
    use SoftDeletes;

    protected $table = 'banca';
    protected $fillable = [
        'bandescricao',
        'banname'
    ];
    protected $primaryKey = 'banid';
    protected  $dates = ['deleted_at'];
    protected $hidden = [
        '_token',
        'updated_at',
        'created_at',
        'deleted_at'
    ];
    public $timestamps = true;
}
