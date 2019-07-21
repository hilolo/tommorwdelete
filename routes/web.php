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

Route::get('/qa', function () {
    return view('location.add');
}) ;

Route::get('/qaa', function () {
    return view('reservation.add');
}) ;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/////////////////////////////// Propraitaire


Route::get('/Proprietaire', 'PropraitaireController@index');
Route::get('/Proprietaire/{id}/View', 'PropraitaireController@View');
Route::get('/Proprietaire/Add', 'PropraitaireController@storeaf');
Route::get('/Proprietaire/{id}/ModifierClient', 'PropraitaireController@updateaf');
Route::post('/insertproprietaire', 'PropraitaireController@insert');
Route::post('/updateproprietaire/{id}', 'PropraitaireController@update');
Route::post('/deleteproprietaire/{id}', 'PropraitaireController@destroy')->name('suppprop');

