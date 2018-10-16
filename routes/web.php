<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/{lg?}', function ($lg = null) {
    if ($lg != null) {
        app()->setLocale($lg);
    }
    $traducao = trans('string.loginIndex');
    return view('index', compact('traducao'));
});
Route::get('/{lg}/painel', function ($lg = null) {
    if ($lg != null) {
        app()->setLocale($lg);
    }
    $traducao = trans('string.pageHome');
    return view('painel.index', compact('traducao'));
});
Route::get('/{lg}/registerOp', function ($lg = null) {
    if ($lg != null) {
        app()->setLocale($lg);
    }
    $traducao = trans('string.pageRegistro');
    return view('painel.registerOp', compact('traducao'));
});
Route::get('/{lg}/product', function ($lg = null) {
    if ($lg != null) {
        app()->setLocale($lg);
    }
    $traducao = trans('string.pageRegistro');
    return view('painel.produto', compact('traducao'));
});
Route::get('/{lg}/process', function ($lg = null) {
    if ($lg != null) {
        app()->setLocale($lg);
    }
    $traducao = trans('string.pageRegistro');
    return view('painel.processo', compact('traducao'));
});
Route::get('/{lg}/re-password', function ($lg = null) {
    if ($lg != null) {
        app()->setLocale($lg);
    }
    $traducao = trans('string.pageRecuperarSenha');
    return view('forgot-password', compact('traducao'));
});
Route::get('/{lg}/register', function ($lg = null) {
    if ($lg != null) {
        app()->setLocale($lg);
    }
    $traducao = trans('string.pageRegistro');
    return view('register', compact('traducao'));
});
