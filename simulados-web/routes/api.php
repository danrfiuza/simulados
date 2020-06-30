<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['as' => 'api.v1.'], function () {
    Route::post('/v1/arvore', 'Api\V1\ArvoreAssuntoController@getArvore')->name('arvore');
    Route::get('/v1/banca', 'Api\V1\BancaController@index')->name('index');
    Route::get('/v1/orgao', 'Api\V1\OrgaoController@index')->name('index');

});
