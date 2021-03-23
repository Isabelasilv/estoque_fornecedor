<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produto','ProdutoController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('produto/delete/{id}','ProdutoController@destroy');

Route::resource('fornecedor','FornecedorController');

Auth::routes();


