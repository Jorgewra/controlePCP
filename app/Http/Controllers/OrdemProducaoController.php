<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\OrdemProducao;
use App\model\ProcessoLigadoOrdemProducao;

class OrdemProducaoController extends Controller
{
    private $ordem;
    private $processoOrdem;
    public function __construct(OrdemProducao $ordem,ProcessoLigadoOrdemProducao $processoOrdem) {
        $this->ordem = $ordem;
        $this->processoOrdem = $processoOrdem;
    }
}
