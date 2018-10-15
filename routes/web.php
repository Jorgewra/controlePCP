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
    if($lg != null){
        app()->setLocale($lg);    		
    }
    $traducao = trans('string.loginIndex');
    return view('index', compact('traducao'));
});
Route::get('/{lg}/painel', function ($lg = null) {
    return view('painel.index');
});
Route::get('/{lg}/registerOp', function ($lg = null) {
    if($lg != null){
        app()->setLocale($lg);    		
    }
    $traducao = trans('string.loginIndex');
    return view('painel.registerOp',compact('traducao'));
});
Route::get('/{lg}/re-password', function ($lg = null) {
    return view('forgot-password');
});
Route::get('/{lg}/register', function ($lg = null) {
    return view('register');
});