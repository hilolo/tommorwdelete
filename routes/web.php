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


/////////////////////////////// Locataire


Route::get('/Locataire', 'LocataireController@index');
Route::get('/Locataire/{id}/View', 'LocataireController@View');
Route::get('/Locataire/Add', 'LocataireController@storeaf');
Route::get('/Locataire/{id}/ModifierClient', 'LocataireController@updateaf');
Route::get('/Locataire/data', 'LocataireController@data');
Route::post('/insertlocataire', 'LocataireController@insert');
Route::post('/updatelocataire/{id}', 'LocataireController@update');
Route::post('/deletelocataire/{id}', 'LocataireController@destroy')->name('suppprop');


/////////////////////////////// Location


Route::get('/Location', 'LocataireController@index');
Route::get('/Location/{id}/View', 'LocataireController@View');
Route::get('/Location/Add', 'LocataireController@storeaf');
Route::get('/Location/{id}/ModifierClient', 'LocataireController@updateaf');
Route::post('/insertlocation', 'LocataireController@insert');
Route::post('/updatelocation/{id}', 'LocataireController@update');
Route::post('/deletelocation/{id}', 'LocataireController@destroy')->name('suppprop');


