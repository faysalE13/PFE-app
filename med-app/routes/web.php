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

Route::get('/rep' , 'ReponseController@med_rep');
Route::get('/profil','UserController@show');
Route::get('/modif/edit','UserController@edit');
Route::get('/form' , 'accueilController@formu');

Route::put('/up/{id}','UserController@update');

Route::post('/form/1','ProfilController@store');
Route::post('/accueil/rup','RuptureController@store');
Route::post('/reponse','ReponseController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
