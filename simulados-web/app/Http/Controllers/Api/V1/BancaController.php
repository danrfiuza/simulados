<?php

namespace App\Http\Controllers\Api\V1;

use App\Services\BancaService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class BancaController extends Controller
{
    protected $bancaService;
    public function __construct(BancaService $bancaService)
    {
        $this->bancaService = $bancaService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bancas = $this->bancaService->listarBancas();
        return response()->json($bancas, Response::HTTP_OK);
    }


}
