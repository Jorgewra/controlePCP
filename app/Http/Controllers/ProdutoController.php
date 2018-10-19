<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Produto;
use Illuminate\Support\Facades\Auth;

class ProdutoController extends Controller
{
    private $produto;
    public function __construct(Produto $produto) {
        $this->produto = $produto;
    }
    public function index($lg = null){
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $lista = Produto::paginate(50);
        $traducao = trans('string.pageHome');
        return view('painel.produto', compact('traducao'), compact('lista'));
    }
    public function sheach($lg = null,Request $request){
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $q = $request->all();
        $lista = Produto::where([['code', 'like', '%' . $q['q'] . '%'],['name', 'like', '%' . $q['q'] . '%']])->paginate(50);
        $traducao = trans('string.pageHome');
        return view('painel.produto', compact('traducao'), compact('lista'));
    }
    public function formCad($lg = null,$id=null){
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $produto = new Produto;
        if($id!=null){
            $produto = Produto::find($id);
            if($produto ==null){
                return back()->withInput();
            }
        }
        $traducao = trans('string.pageHome');
        return view('painel.cadProduto')->with(compact('produto', 'traducao'));
    }
    public function store(Request $request,$lg = null){
        try{
            $value = $request->all();
            $user = Auth::guard('pcp')->user();
            if($value['id']){
                $this->produto = Produto::find($value['id']);
            }
            $this->produto->fill($request->all());
            $this->produto->users_id = $user->id;           
            
            $this->produto->save();
        }catch(\Exception $e){
            return back()
           // ->withErrors(['mensagem' => ' Sorry something went worng'])
            ->withErrors(['mensagem' => $e->getMessage()])
            ->withInput();
        }
        return back()->with('success', 'Salvo com sucesso!');

    }


}
