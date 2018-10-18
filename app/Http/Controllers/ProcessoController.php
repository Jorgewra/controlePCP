<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Processo;
use App\model\FluxoProcesso;

class ProcessoController extends Controller
{
    private $processo;
    private $fluxo;
    public function __construct(Processo $processo,FluxoProcesso $fluxo) {
        $this->produto = $produto;
        $this->fluxo = $fluxo;
    }
}
