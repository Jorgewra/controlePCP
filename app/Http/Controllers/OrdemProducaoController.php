<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\OrdemProducao;
use App\model\ProcessoLigadoOrdemProducao;
use App\model\Processo;

class OrdemProducaoController extends Controller
{
    private $ordem;
    private $processoOrdem;
    public function __construct(OrdemProducao $ordem,ProcessoLigadoOrdemProducao $processoOrdem) {
        $this->ordem = $ordem;
        $this->processoOrdem = $processoOrdem;
    }
    public function index($lg = null)
    {
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $lista = Processo::paginate(200);
        $traducao = trans('string.pageHome');
        return view('painel.registerOp', compact('traducao','lista'));
        
    }

}
