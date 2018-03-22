<?php

Route::get('/', function () {
   return view('welcome');
}) -> name('welcome');

Auth::routes();

Route::get('idioma', 'SiteController@index') -> name('verificar.idioma');

Route::prefix('gerenciador') -> group(function(){
   Route::get('{lang}', 'SiteController@gerenciadorsetIdioma') -> name('gerenciador.setidioma');
   Route::get('inicial/{lang}', 'SiteController@gerenciadorInicial') -> name('gerenciador.inicial');
   Route::get('sobre/{lang}', 'SiteController@gerenciadorSobre') -> name('gerenciador.sobre');
   Route::get('idiomas/{lang}', 'SiteController@gerenciadorIdiomas') -> name('gerenciador.idiomas');
   Route::get('cartas/{lang}', 'SiteController@gerenciadorCartas') -> name('gerenciador.cartas');
   Route::get('localizacao/{lang}', 'SiteController@gerenciadorLocalizacao') -> name('gerenciador.localizacao');
   Route::get('header/{lang}', 'SiteController@gerenciadorHeader') -> name('gerenciador.header');
   Route::get('footer/{lang}', 'SiteController@gerenciadorFooter') -> name('gerenciador.footer');
});

// Rotas de atualização textos do site
Route::prefix('gerenciador/update') -> group(function(){
   Route::patch('inicial_pt/{id}', 'AtualizaController@atualizaInicial_pt') -> name('inicial_pt.atualizar');
   Route::patch('inicial_en/{id}', 'AtualizaController@atualizaInicial_en') -> name('inicial_en.atualizar');
   Route::patch('inicial_es/{id}', 'AtualizaController@atualizaInicial_es') -> name('inicial_es.atualizar');
   Route::patch('inicial_it/{id}', 'AtualizaController@atualizaInicial_it') -> name('inicial_it.atualizar');
   Route::patch('sobre/{id}', 'AtualizaController@atualizaSobre') -> name('sobre.atualizar');
   Route::patch('idiomas/{id}', 'AtualizaController@atualizaIdiomas') -> name('idiomas.atualizar');
   Route::patch('local/{id}', 'AtualizaController@atualizaLocal') -> name('local.atualizar');
   Route::patch('header/{id}', 'AtualizaController@atualizaHeader') -> name('header.atualizar');
   Route::patch('footer/{id}', 'AtualizaController@atualizaFooter') -> name('footer.atualizar');
});

Route::prefix('gerenciador/depoimentos') -> group(function(){
   Route::view('inserir', 'gerenciador.site.depoimentos.inserirdepoimentos')-> name('depoimentos.inserir');
   Route::get('exibir/{lang}', 'DepoimentosController@gerenciadorDepoimentosExibir') -> name('depoimentos.exibir');
   Route::patch('atualizar/{id}/{pos}', 'DepoimentosController@gerenciadorDepoimentosAtualizar') -> name('depoimentos.atualizar');
   Route::post('gravar', 'DepoimentosController@gerenciadorDepoimentosGravar') -> name('depoimentos.gravar');
});

Route::prefix('gerenciador/clientes') -> group(function(){
   Route::view('inserir', 'gerenciador.site.clientes.inserir')-> name('clientes.inserir');
   Route::get('lista', 'ClientesController@gerenciadorClientesLista') -> name('clientes.lista');
   Route::post('gravar', 'ClientesController@gerenciadorClientesGravar') -> name('clientes.gravar');
   Route::get('editar/{id}', 'ClientesController@gerenciadorClientesEditar') -> name('clientes.editar');
   Route::patch('atualizar/{id}', 'ClientesController@gerenciadorClientesAtualizar') -> name('clientes.atualizar');
   Route::delete('excluir/{id}', 'ClientesController@gerenciadorClientesExcluir') -> name('clientes.excluir');
});

Route::prefix('gerenciador/other') -> group(function(){
   Route::get('logs', 'OtherController@otherLogs') -> name('other.logs');
   Route::get('orcamentos', 'OtherController@otherOrcamentos') -> name('other.orcamentos');
   Route::get('listausuarios', 'OtherController@listaUsuarios') -> name('other.listausuarios');
   Route::get('registrarusuarios', 'OtherController@registrarUsuarios') -> name('other.registrarusuarios');
   Route::delete('excluirusuarios/{id}', 'OtherController@excluirUsuarios') -> name('other.excluirusuarios');
});

Route::prefix('gerenciador/cidadania') -> group(function(){
   Route::get('{id}', 'CidadaniaController@cidadaniaExibir') -> name('cidadania.exibir');
   Route::patch('{id}', 'CidadaniaController@cidadaniaAtualizar') -> name('cidadania.atualizar');
});
