<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Produto;

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
    public function formCad($lg = null){
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $traducao = trans('string.pageHome');
        return view('painel.cadProduto', compact('traducao'));
    }
    public function store(Request $request,$lg = null){
        try{
            $this->produto->fill($request->all());
            $this->users_id = auth()->guard('pcp')->user()->id;
            $this->produto->save();
        }catch(\Exception $e){
            return back()
           // ->withErrors(['mensagem' => ' Sorry something went worng'])
            ->withErrors(['mensagem' => $e->getMessage()])
            ->withInput();
        }
        return back()->with('success', 'Cadastro realizado com sucesso!');

    }


}
