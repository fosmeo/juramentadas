<?php

// Route::get('/', function () {
// }) -> name('welcome');

Auth::routes();

Route::get('/', 'SiteController@Index') -> name('welcome');

Route::get('idioma', 'GerenciadorController@indedddx') -> name('verificar.idioma');

Route::prefix('site') -> group(function(){
   Route::get('{lang}', 'SiteController@SitesetIdioma') -> name('site.setidioma');
   Route::get('servicos/{lang}/{textos_posicao}', 'SiteController@SiteServicos') -> name('site.servicos');
   Route::get('idiomas/{lang}', 'SiteController@SiteIdiomas') -> name('site.idiomas');
   Route::get('parceiros/{lang}', 'SiteController@SiteParceiros') -> name('site.parceiros');
   Route::get('cartas/{lang}', 'SiteController@SiteCartas') -> name('site.cartas');
   Route::get('localizacao/{lang}', 'SiteController@SiteLocalizacao') -> name('site.localizacao');
   // Route::get('sobre/{lang}', 'SiteController@SiteSobre') -> name('site.sobre');
   // Route::get('quemsomos/{lang}', 'SiteController@SiteQuemSomos') -> name('site.quemsomos');
});

Route::prefix('gerenciador') -> group(function(){
   Route::get('/', 'GerenciadorController@gerenciadorIndex') -> name('gerenciador.index');
   Route::get('{lang}', 'GerenciadorController@gerenciadorsetIdioma') -> name('gerenciador.setidioma');
   Route::get('inicial/{lang}', 'GerenciadorController@gerenciadorInicial') -> name('gerenciador.inicial');
   Route::get('idiomas/{lang}', 'GerenciadorController@gerenciadorIdiomas') -> name('gerenciador.idiomas');
   Route::get('cartas/{lang}', 'GerenciadorController@gerenciadorCartas') -> name('gerenciador.cartas');
   Route::get('localizacao/{lang}', 'GerenciadorController@gerenciadorLocalizacao') -> name('gerenciador.localizacao');
   Route::get('navbar/{lang}', 'GerenciadorController@gerenciadorNavbar') -> name('gerenciador.navbar');
   Route::get('header/{lang}', 'GerenciadorController@gerenciadorHeader') -> name('gerenciador.header');
   Route::get('footer/{lang}', 'GerenciadorController@gerenciadorFooter') -> name('gerenciador.footer');
});

// Rotas de atualização textos do site
Route::prefix('gerenciador/update') -> group(function(){
   Route::patch('inicial_pt/{id}', 'AtualizaController@atualizaInicial_pt') -> name('inicial_pt.atualizar');
   Route::patch('inicial_en/{id}', 'AtualizaController@atualizaInicial_en') -> name('inicial_en.atualizar');
   Route::patch('inicial_es/{id}', 'AtualizaController@atualizaInicial_es') -> name('inicial_es.atualizar');
   Route::patch('inicial_it/{id}', 'AtualizaController@atualizaInicial_it') -> name('inicial_it.atualizar');
   Route::patch('idiomas/{id}', 'AtualizaController@atualizaIdiomas') -> name('idiomas.atualizar');
   Route::patch('local/{id}', 'AtualizaController@atualizaLocal') -> name('local.atualizar');
   Route::patch('header/{id}', 'AtualizaController@atualizaHeader') -> name('header.atualizar');
   Route::patch('navbar/{id}', 'AtualizaController@atualizaNavbar') -> name('navbar.atualizar');
   Route::patch('footer/{id}', 'AtualizaController@atualizaFooter') -> name('footer.atualizar');
});

Route::prefix('gerenciador/sobre') -> group(function(){
   Route::view('inserir', 'gerenciador.site.sobre.inserir')-> name('sobre.inserir');
   Route::post('gravar', 'SobreController@gerenciadorSobreGravar') -> name('sobre.gravar');
   Route::get('editar/{lang}', 'SobreController@gerenciadorSobreEditar') -> name('sobre.editar');
   Route::patch('atualizar/{id}', 'SobreController@gerenciadorSobreAtualizar') -> name('sobre.atualizar');
   Route::delete('excluir/{id}', 'SobreController@gerenciadorSobreExcluir') -> name('sobre.excluir');
});

Route::prefix('gerenciador/sliders') -> group(function(){
   Route::view('inserir', 'gerenciador.site.sliders.inserir')-> name('sliders.inserir');
   Route::get('lista', 'SlidersController@gerenciadorSlidersLista') -> name('sliders.lista');
   Route::post('gravar', 'SlidersController@gerenciadorSlidersGravar') -> name('sliders.gravar');
   Route::get('editar/{id_slider}', 'SlidersController@gerenciadorSlidersEditar') -> name('sliders.editar');
   Route::patch('atualizar/{id_slider}', 'SlidersController@gerenciadorSlidersAtualizar') -> name('sliders.atualizar');
   Route::patch('atualizarimagem/{id_slider}', 'SlidersController@gerenciadorSliderAtualizarImagem') -> name('sliders.atualizar.imagem');
   Route::delete('excluir/{id_slider}', 'SlidersController@gerenciadorSlidersExcluir') -> name('sliders.excluir');
});

Route::prefix('gerenciador/depoimentos') -> group(function(){
   Route::view('inserir', 'gerenciador.site.depoimentos.inserir')-> name('depoimentos.inserir');
   Route::get('lista', 'DepoimentosController@gerenciadorDepoimentosLista') -> name('depoimentos.lista');
   Route::post('gravar', 'DepoimentosController@gerenciadorDepoimentosGravar') -> name('depoimentos.gravar');
   Route::get('editar/{id_depoimento}', 'DepoimentosController@gerenciadorDepoimentosEditar') -> name('depoimentos.editar');
   Route::patch('atualizar/{id_depoimento}', 'DepoimentosController@gerenciadorDepoimentosAtualizar') -> name('depoimentos.atualizar');
   Route::patch('atualizarlogo/{id_depoimento}', 'DepoimentosController@gerenciadorDepoimentosAtualizarLogo') -> name('depoimentos.atualizar.logo');
   Route::delete('excluir/{id_depoimento}', 'DepoimentosController@gerenciadorDepoimentosExcluir') -> name('depoimentos.excluir');
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
