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

Route::get('/', function () {
    return view('index');
});
Route::get('/painel', function () {
    return view('painel.index');
});
Route::get('/registerOp', function () {
    return view('painel.registerOp');
});
Route::get('/re-password', function () {
    return view('forgot-password');
});
Route::get('/register', function () {
    return view('register');
});