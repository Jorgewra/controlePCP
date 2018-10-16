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

Route::get('/{lg?}', 'UserController@index');
Route::post('/{lg}/login', 'UserController@auth');
Route::get('/{lg}/re-password', 'UserController@repassword');
Route::get('/{lg}/register', 'UserController@register');
Route::group(['prefix' => 'pcp','middleware'=>'pcp'],function () {
    Route::get('/{lg}/painel','HomeController@index');
});
/*

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
});*/

