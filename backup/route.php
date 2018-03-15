
Route::prefix('gerenciador/site') -> group(function(){
   Route::get('sobre/{lang}', 'SiteController@gerenciadorSobre') -> name('gerenciador.sobre');
   Route::get('idiomas/{lang}', 'SiteController@gerenciadorIdiomas') -> name('gerenciador.idiomas');
   Route::get('clientes', 'SiteController@gerenciadorListaClientes') -> name('gerenciador.clientes');
}
