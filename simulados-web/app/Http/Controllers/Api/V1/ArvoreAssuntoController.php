<?php

namespace App\Http\Controllers\Api\V1;

use App\Entities\ArvoreAssunto;
use App\Entities\Banca;
use App\Entities\Orgao;
use App\Http\Requests\ArvoreAssuntoBuscarPorOrgaoBancaRequest;
use App\Services\ArvoreAssuntoService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class ArvoreAssuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $assuntoService;
    public function __construct(ArvoreAssuntoService $assuntoService)
    {
        $this->assuntoService = $assuntoService;
    }

    public function index()
    {

    }

    public function getArvore(Request $request)
    {
        $orgid = $request->get('orgid');
        $banid = $request->get('banid');

        $arvoreAssuntos = $this->assuntoService->buscarArvoreAssuntosPorOrgaoBanca($orgid,$banid);

        return response()->json($arvoreAssuntos, Response::HTTP_OK);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArvoreAssunto  $arvoreAssunto
     * @return \Illuminate\Http\Response
     */
    public function show(ArvoreAssunto $arvoreAssunto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArvoreAssunto  $arvoreAssunto
     * @return \Illuminate\Http\Response
     */
    public function edit(ArvoreAssunto $arvoreAssunto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArvoreAssunto  $arvoreAssunto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ArvoreAssunto $arvoreAssunto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArvoreAssunto  $arvoreAssunto
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArvoreAssunto $arvoreAssunto)
    {
        //
    }
}
