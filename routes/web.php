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
Route::post('/{lg}/login', 'UserController@auths');
Route::post('/{lg}/new-user', 'UserController@newUser');
Route::post('/{lg}/recoverPassword', 'UserController@recoverPassword');
Route::get('/{lg}/re-password', 'UserController@repassword');
Route::get('/{lg}/register', 'UserController@register');
Route::group(['prefix' => 'pcp','middleware'=>'auth'],function () {
    Route::get('/{lg}/painel','HomeController@index');
    Route::get('/{lg}/logout','HomeController@logout');
    
    Route::get('/{lg}/product','ProdutoController@index');
    Route::get('/{lg}/new-product/{id?}','ProdutoController@formCad');
    Route::post('/{lg}/save-product','ProdutoController@store');
    Route::get('/{lg}/process','ProcessoController@index');
    Route::get('/{lg}/new-process/{id?}','ProcessoController@formCad');
    Route::post('/{lg}/save-process','ProcessoController@store');
    Route::get('/{lg}/registerOp/{id?}','OrdemProducaoController@index');
    Route::post('/{lg}/save-ordem','OrdemProducaoController@store');
    Route::get('/{lg}/apontar-ordem/{id}','OrdemProducaoController@fromApont');
    Route::post('/{lg}/sheach','HomeController@sheach');
    Route::post('/{lg}/lancar-ordem','OrdemProducaoController@lancar');
});

