<?php

namespace App\Http\Controllers;

use App\model\OrdemProducao;
use App\model\Processo;
use App\model\ProcessoLigadoOrdemProducao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\model\Produto;

class OrdemProducaoController extends Controller
{
    private $ordem;
    private $processoOrdem;
    public function __construct(OrdemProducao $ordem, ProcessoLigadoOrdemProducao $processoOrdem)
    {
        $this->ordem = $ordem;
        $this->processoOrdem = $processoOrdem;
    }
    public function index($lg = null, $id = null)
    {
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $ordem = new OrdemProducao;
        if ($id != null) {
            $ordem = OrdemProducao::where('id', $id)->with('getProduto')->with('getProcessos')->first();
            if ($ordem == null) {
                return back()->withInput();
            }
        }
        $lista = Processo::paginate(200);
        $traducao = trans('string.pageHome');
        return view('painel.registerOp', compact('traducao', 'lista', 'ordem'));

    }
    public function store(Request $request, $lg = null)
    {
        $value = $request->all();        
        try {
            if ($value['id']) {
                $this->ordem = OrdemProducao::where('id', $$value['id'])->first();
            }
          
            $produto = new Produto();
            $produto = Produto::where('code', $value['code_produto'])->first();
            if($produto==null){
                return back()
                ->withErrors(['mensagem' => 'Code Product Invalid!'])
                ->withInput();
            }
            $user = Auth::guard('pcp')->user();
            $this->ordem->fill($request->all());
            $this->ordem->users_id = $user->id;
            $this->ordem->produto_id = $produto->id;
            $this->ordem->status = 1;
            $this->ordem->save();
            $this->processoOrdem->status= 1;
            $this->processoOrdem->flow = 'Criado';            
            $this->processoOrdem->ordem_producaos_id = $this->ordem->id;
            $this->processoOrdem->processos_id = $value['processos_id'];
            $this->processoOrdem->users_id = $user->id;
            $this->processoOrdem->save();            
        } catch (\Exception $e) {
            return back()
            // ->withErrors(['mensagem' => ' Sorry something went worng'])
            ->withErrors(['mensagem' => $e->getMessage()])
                ->withInput();
        }
        return back()->with('success', 'Salvo com sucesso!');
    }
   

}
