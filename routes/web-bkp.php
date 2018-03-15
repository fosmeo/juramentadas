<?php

Route::get('/', function () {
   return view('welcome');
});

Auth::routes();

Route::get('gerenciador', 'SiteController@index') -> name('verificar.idioma');

Route::prefix('gerenciador/site') -> group(function(){
   Route::get('{lang}', 'SiteController@gerenciadorsetIdioma') -> name('gerenciador.setIdioma');
   Route::get('inicial/{lang}', 'SiteController@gerenciadorInicial') -> name('gerenciador.inicial');
   Route::get('sobre/{lang}', 'SiteController@gerenciadorSobre') -> name('gerenciador.sobre');
   Route::get('idiomas/{lang}', 'SiteController@gerenciadorIdiomas') -> name('gerenciador.idiomas');
   Route::get('clientes/', 'SiteController@gerenciadorListaClientes') -> name('gerenciador.clientes.lista');
   Route::get('depoimentos/{lang}', 'SiteController@gerenciadorDepoimentos') -> name('gerenciador.depoimentos');
   Route::get('cartas/{lang}', 'SiteController@gerenciadorCartas') -> name('gerenciador.cartas');
   Route::get('localizacao/{lang}', 'SiteController@gerenciadorLocalizacao') -> name('gerenciador.localizacao');
   Route::get('header/{lang}', 'SiteController@gerenciadorHeader') -> name('gerenciador.header');
   Route::get('footer/{lang}', 'SiteController@gerenciadorFooter') -> name('gerenciador.footer');
});

Route::prefix('gerenciador/other') -> group(function(){
   Route::get('logs', 'OtherController@otherLogs') -> name('gerenciador.logs');
   Route::get('orcamentos', 'OtherController@otherOrcamentos') -> name('gerenciador.orcamentos');
});

Route::prefix('gerenciador/cidadania') -> group(function(){
   Route::get('{id}', 'CidadaniaController@cidadaniaExibir') -> name('gerenciador.cidadania.exibir');
   Route::patch('{id}', 'CidadaniaController@cidadaniaAtualizar') -> name('gerenciador.cidadania.atualiza');
});

// Rotas de atualização site
Route::prefix('gerenciador/update') -> group(function(){
   Route::patch('inicial_pt/{id}', 'AtualizaController@atualizaInicial_pt') -> name('inicial_pt.atualiza');
   Route::patch('inicial_en/{id}', 'AtualizaController@atualizaInicial_en') -> name('inicial_en.atualiza');
   Route::patch('inicial_es/{id}', 'AtualizaController@atualizaInicial_es') -> name('inicial_es.atualiza');
   Route::patch('inicial_it/{id}', 'AtualizaController@atualizaInicial_it') -> name('inicial_it.atualiza');

   //Não necessitam rotas para idioma pois os idiomas são divididos por IDs separados na tabela
   Route::patch('sobre/{id}', 'AtualizaController@atualizaSobre') -> name('sobre.atualiza');
   Route::patch('idiomas/{id}', 'AtualizaController@atualizaIdiomas') -> name('idiomas.atualiza');
   Route::patch('depoimentos/{id}', 'AtualizaController@atualizaDepoimentos') -> name('depoimentos.atualiza');
   Route::patch('local/{id}', 'AtualizaController@atualizaLocal') -> name('local.atualiza');
   Route::patch('footer/{id}', 'AtualizaController@atualizaFooter') -> name('footer.atualiza');
});
