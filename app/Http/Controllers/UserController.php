<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($lg = null)
    {
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $traducao = trans('string.loginIndex');
        return view('index', compact('traducao'));
    }

    public function register($lg = null)
    {
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $traducao = trans('string.pageRegistro');
        return view('register', compact('traducao'));
    }
    public function repassword($lg = null)
    {
        if ($lg != null) {
            app()->setLocale($lg);
        }
        $traducao = trans('string.pageRecuperarSenha');
        return view('forgot-password', compact('traducao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auth(Request $request,$lg = null)
    {
        $validate = validator($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6']
        );
        if ($validate->fails()) {
            return back()
                ->withErrors(['errors' => 'Informações de acesso inválidos!'])
                ->withInput();
        }
        $credentical = ['email' => $request->get('email'), 'password' => $request->get('password')];
        if (auth()->guard('pcp')->attempt($credentical)) {
            return redirect('/'.$lg.'/painel');
        } else {
            return back()
                ->withErrors(['errors' => 'Acesso inválidos!'])
                ->withInput();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
