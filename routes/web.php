<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('setidioma', 'SiteController@index') -> name('setidioma');

Route::prefix('gerenciador/site') -> group(function(){
    Route::get('{idioma}', 'SiteController@gerenciadorsetIdioma') -> name('gerenciador.setIdioma');
    Route::get('inicial/{idioma}', 'SiteController@gerenciadorInicial') -> name('gerenciador.inicial');
    Route::get('sobre/{idioma}', 'SiteController@gerenciadorSobre') -> name('gerenciador.sobre');
    Route::get('idiomas/{idioma}', 'SiteController@gerenciadorIdiomas') -> name('gerenciador.idiomas');
    Route::get('clientes/{idioma}', 'SiteController@gerenciadorClientes') -> name('gerenciador.clientes');
    Route::get('depoimentos/{idioma}', 'SiteController@gerenciadorDepoimentos') -> name('gerenciador.depoimentos');
    Route::get('cartas/{idioma}', 'SiteController@gerenciadorCartas') -> name('gerenciador.cartas');
    Route::get('localizacao/{idioma}', 'SiteController@gerenciadorLocalizacao') -> name('gerenciador.localizacao');
    Route::get('header/{idioma}', 'SiteController@gerenciadorHeader') -> name('gerenciador.header');
    Route::get('footer/{idioma}', 'SiteController@gerenciadorFooter') -> name('gerenciador.footer');
});

Route::prefix('gerenciador/other') -> group(function(){
    Route::get('logs', 'SiteController@gerenciadorLogs') -> name('gerenciador.logs');
    Route::get('orcamentos', 'SiteController@gerenciadorOrcamentos') -> name('gerenciador.orcamentos');
});

Route::prefix('gerenciador/cidadania') -> group(function(){
    Route::get('cidadaniaApostilamento', 'CidadaniaController@cidadaniaApostilamento') -> name('gerenciador.cid.apostilamento');
    Route::get('cid_casamento', 'CidadaniaController@cidadaniaCasamento') -> name('gerenciador.cid.casamento');
    Route::get('cid_comecar', 'CidadaniaController@cidadaniaComecar') -> name('gerenciador.cid.comecar');
    Route::get('cid_direito', 'CidadaniaController@cidadaniaDireito') -> name('gerenciador.cid.direito');
    Route::get('cid_duvidas', 'CidadaniaController@cidadaniaDuvidas') -> name('gerenciador.cid.duvidas');
    Route::get('cid_eleicao', 'CidadaniaController@cidadaniaEleicao') -> name('gerenciador.cid.eleicao');
    Route::get('cid_haia', 'CidadaniaController@cidadaniaHaia') -> name('gerenciador.cid.haia');
    Route::get('cid_itabra', 'CidadaniaController@cidadaniaItaBra') -> name('gerenciador.cid.itabra');
    Route::get('cid_natural', 'CidadaniaController@cidadaniaNatural') -> name('gerenciador.cid.natural');
    Route::get('cid_sangue', 'CidadaniaController@cidadaniaSangue') -> name('gerenciador.cid.sangue');
    Route::get('cid_trentina', 'CidadaniaController@cidadaniaTrentina') -> name('gerenciador.cid.trentina');
});
