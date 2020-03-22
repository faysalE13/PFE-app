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

Route::get('/', function () { 
    return view('welcome');
});
Route::get('/accueil' , 'accueilController@acc');
Route::get('/pharmacie' , 'RuptureController@med_valide');
Route::get('/fourni' , 'accueilController@four');
Route::get('/rep' , 'ReponseController@med_rep');
Route::get('/form' , 'accueilController@formu');
Route::get('/pharmacie' , 'RuptureController@med_valide');

Route::post('/form/1','ProfilController@store');
Route::post('/accueil/rup','RuptureController@store');
Route::post('/reponse','ReponseController@store');
Route::get('/liste_pharmacie','ProfilController@liste_pharmacies');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
