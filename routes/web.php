<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CarrinhoController;

Route::resource('produtos', ProdutoController::class);

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');

Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');
Route::post('/carrinho', [CarrinhoController::class, 'adicionarCarrinho'])->name('site.addcarrinho');
Route::post('/remover', [CarrinhoController::class, 'removeCarrinho'])->name('site.removecarrinho');














/*
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function(){

    Route::get('darshboard', function(){
        return "dashboard";
    })->name('dashboard');

    Route::get('users', function(){
        return "users";
    })->name('users');
    
    Route::get('clientes', function(){
        return "clientes";
    })->name('clientes');

});

Route::get('/empresa', function () {
    return view('site/empresa');
});

Route::any('/any', function(){
    return "Permite todo tipo de acesso http (put, delete, get, post";
});

Route::match(['put', 'delete'], '/match', function(){
    return "Permite apenas acessos definidos";
});

Route::get('/produto/{id}/{cat?}', function($id, $cat = ''){
    return "O id do produto é: ".$id."<br>"."A categoria é: ".$cat;
});


Route::get('/sobre', function(){
    return redirect('/empresa');
}); 

MAS TAMBEM PODE SER ESCRITO ASSIM 

Route::redirect('/sobre', '/empresa');
Route::view('/empresa', '/site/empresa');



Route::get('/news', function(){
    return view('news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->('noticias');
});
*/