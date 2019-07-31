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
Route::get('/Proprietaire/data', 'PropraitaireController@data');
Route::post('/insertproprietaire', 'PropraitaireController@insert');
Route::post('/updateproprietaire/{id}', 'PropraitaireController@update');
Route::post('/deleteproprietaire/{id}', 'PropraitaireController@destroy')->name('suppprop');


/////////////////////////////// Locataire


Route::get('/Locataire', 'LocataireController@index');
Route::get('/Locataire/{id}/View', 'LocataireController@View');
Route::get('/Locataire/Add', 'LocataireController@storeaf');
Route::get('/Locataire/{id}/ModifierClient', 'LocataireController@updateaf');
Route::get('/Locataire/data', 'LocataireController@data');
Route::post('/insertlocataire', 'LocataireController@insert');
Route::post('/updatelocataire/{id}', 'LocataireController@update');
Route::post('/deletelocataire/{id}', 'LocataireController@destroy')->name('suppprop');


/////////////////////////////// biens


Route::get('/Biens', 'BienController@index');
Route::get('/Biens/{id}/View', 'BienController@View');
Route::get('/Biens/Add', 'BienController@storeaf');
Route::get('/Biens/{id}/ModifierClient', 'BienController@updateaf');
Route::get('/Biens/data', 'BienController@data');
Route::get('/Biens/data2', 'BienController@data2');
Route::post('/insertbien', 'BienController@insert');
Route::post('/updatebien/{id}', 'BienController@update');
Route::post('/deletebien/{id}', 'BienController@destroy')->name('suppbien');


