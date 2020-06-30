<?php

namespace App\Http\Controllers\Api\V1;

use App\Services\OrgaoService;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class OrgaoController extends Controller
{
    protected $orgaoService;
    public function __construct(OrgaoService $orgaoService)
    {
        $this->orgaoService = $orgaoService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orgaos = $this->orgaoService->listarOrgaos();
        return response()->json($orgaos, Response::HTTP_OK);
    }


}
