<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('setidioma', 'GerenciadorController@index') -> name('setidioma');

Route::prefix('gerenciador/site') -> group(function(){
    Route::get('/{idioma}', 'GerenciadorController@gerenciadorsetIdioma') -> name('gerenciador.setIdioma');
    Route::get('/inicial/{idioma}', 'GerenciadorController@gerenciadorInicial') -> name('gerenciador.inicial');
    Route::get('/sobre/{idioma}', 'GerenciadorController@gerenciadorSobre') -> name('gerenciador.sobre');
    Route::get('/idiomas/{idioma}', 'GerenciadorController@gerenciadorIdiomas') -> name('gerenciador.idiomas');
    Route::get('/clientes/{idioma}', 'GerenciadorController@gerenciadorClientes') -> name('gerenciador.clientes');
    Route::get('/depoimentos/{idioma}', 'GerenciadorController@gerenciadorDepoimentos') -> name('gerenciador.depoimentos');
    Route::get('/cartas/{idioma}', 'GerenciadorController@gerenciadorCartas') -> name('gerenciador.cartas');
    Route::get('/localizacao/{idioma}', 'GerenciadorController@gerenciadorLocalizacao') -> name('gerenciador.localizacao');
    Route::get('/header/{idioma}', 'GerenciadorController@gerenciadorHeader') -> name('gerenciador.header');
    Route::get('/footer/{idioma}', 'GerenciadorController@gerenciadorFooter') -> name('gerenciador.footer');
});

Route::prefix('gerenciador/other') -> group(function(){
    Route::get('logs', 'GerenciadorController@gerenciadorLogs') -> name('gerenciador.logs');
    Route::get('orcamentos', 'GerenciadorController@gerenciadorOrcamentos') -> name('gerenciador.orcamentos');
});
