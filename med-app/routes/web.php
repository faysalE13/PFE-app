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

/*Route::get('/', function () { 
    return view('welcome');
});*/
//Route::get('/pharmacie' , 'UserController@med_valide');
//Route::get('/fourni' , 'HomeController@med_rep_four');



Route::get('/' , 'accueilController@acc');

Route::get('/rep' , 'accueilController@med_rep');
Route::get('/profil','UserController@show');
Route::get('/liste/pharmacie','UserController@show_liste_pharmacie');
Route::get('/modif/edit','UserController@edit');
Route::get('/form' , 'accueilController@formu');
Route::get('/ajout' , 'MedicamentController@ajouter');
Route::get('/liste' , 'MedicamentController@show');
Route::get('/profil/med' , 'MedicamentController@sho');
Route::get('/edit/{id}/med' , 'MedicamentController@edit');
Route::get('/rep/edit/{id}','ReponseController@edit');
Route::get('/profil/historique','ReponseController@historiq');
Route::get('/profil/liste/recherche','ReponseController@liste_recherch');
Route::get('/liste/pharmacie/{id}','UserController@profil_view');



Route::post('/rep/{id}','ReponseController@store');



Route::put('/up/{id}','UserController@update');
Route::put('/up/med/{id}','MedicamentController@update');

Route::post('/form/1','ProfilController@store');  
Route::post('/accueil/rup','RuptureController@store');
Route::post('/reponse','ReponseController@store');
Route::post('/ajout/med','MedicamentController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
