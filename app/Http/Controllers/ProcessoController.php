<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Processo;
use App\model\FluxoProcesso;
use Illuminate\Support\Facades\Auth;

class ProcessoController extends Controller
{
    private $processo;
    private $fluxo;
    public function __construct(Processo $processo,FluxoProcesso $fluxo) {
        $this->processo = $processo;
        $this->fluxo = $fluxo;
    }
    public function index($lg = null){
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $lista = Processo::paginate(50);
        $traducao = trans('string.pageHome');
        return view('painel.processo', compact('traducao'), compact('lista'));
    }
    public function formCad($lg = null,$id=null){
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $processo = new Processo;
        if($id!=null){
            $processo = Processo::where('id', $id)->with('getFluxos')->first();
            if($processo ==null){
                return back()->withInput();
            }
        }
        $traducao = trans('string.pageHome');
        return view('painel.cadProcesso')->with(compact('processo', 'traducao'));
    }
    public function store(Request $request,$lg = null){
        try{
            $value = $request->all();           
            if($value['id']){
                $this->processo = Processo::where('id', $$value['id'])->with('getFluxos')->first();
            }            
            $this->processo->fill($request->all());
            $this->processo->save();
            /*//Remover fluxo
            if(isset($this->processo->getFluxos)){               
                foreach($this->processo->getFluxos as $f){
                    $achou = false;
                    foreach($value['campo'] as $v){
                        if($f->name == $v->name){
                            $achou = true;
                            break;
                        }
                    }
                    if(!$achou){
                        $this->fluxo = FluxoProcesso::where([['id',  $f->id]])->first();
                        if($this->fluxo) $this->fluxo->delete();
                    }
                }
            }
            //Adicionar Fluxo
            foreach($value['campo'] as $v){
                $this->fluxo = FluxoProcesso::where([['name',  $v],['processo_id', $this->processo->id]])->first();
                $this->fluxo->name = $v;
                $this->fluxo->processo_id = $this->processo->id;
                $this->fluxo->users_id = $user->id;
                $this->fluxo->status = 1;
                $this->fluxo->save();
            }*/

        }catch(\Exception $e){
            return back()
           // ->withErrors(['mensagem' => ' Sorry something went worng'])
            ->withErrors(['mensagem' => $e->getMessage()])
            ->withInput();
        }
        return back()->with('success', 'Salvo com sucesso!');

    }
}
