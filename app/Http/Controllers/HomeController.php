<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\model\OrdemProducao;
use App\model\Processo;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lg = null)
    {
        if (Auth::guard('pcp')->check()) {
            if ($lg != null) {
                app()->setLocale($lg);
            }
            $lista = OrdemProducao::with('getProduto')->with('getProcessos')->paginate(50);            
            $traducao = trans('string.pageHome');
            $index = 'active';
            return view('painel.index', compact('traducao','index','lista'));
        }else{
            return redirect()->action('UserController@index');
        }
        
    }

    public function sheach($lg = null,Request $request){
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $q = $request->all();        
        $lista = OrdemProducao::where([['code', 'like', '%' .  $q['q'] . '%']])->with('getProduto')->with('getProcessos')->paginate(50);
        $traducao = trans('string.pageHome');
        return view('painel.index', compact('traducao','lista'));
    }
}
