<?php




Route::get('/', function () {
    return redirect('login');
});

Route::get('accueil', 'Ecrans\AccueilController@index');


Route::group([], function(){

    Route::resource('projets', 'Projets\ProjetsController');
});

// Les Commentaires sur Projet
Route::post('{projet}/commentaires','Projets\CommentairesController@store' );



Route::get('login', 'Ecrans\LoginController@getForm');
//Route::post('login', 'Ecrans\LoginController@postFormLdap');
Route::post('login', 'Ecrans\LoginController@postFormPublic');
Route::get('logout', 'Ecrans\LogoutController@index');


Route::get('rechercher-projet', 'Projets\RechercherProjetController@getForm');
Route::post('rechercher-projet', 'Projets\RechercherProjetController@postForm')->name('rechercher-projet');


Route::get('ajouter-projet', 'Projets\AjouterProjetController@create');
Route::post('ajouter-projet', 'Projets\AjouterProjetController@store');
Route::get('{projet}/edit', 'Projets\AjouterProjetController@edit');
Route::put('{projet}/update', 'Projets\AjouterProjetController@update');
Route::delete('{projet}/delete', 'Projets\AjouterProjetController@destroy');



// Exporter en CSV
Route::post('/export','Projets\ProjetsController@export');
//Route::post('/exportsingleprojet/{id}','Projets\ProjetsController@exportsingleprojet');


