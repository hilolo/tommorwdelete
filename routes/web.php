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
Route::get('/Proprietaire/Adddocs', 'PropraitaireController@storedocs');
Route::get('/Proprietaire/{id}/ModifierClient', 'PropraitaireController@updateaf');
Route::get('/Proprietaire/data', 'PropraitaireController@data');
Route::get('/Proprietaire/data2', 'PropraitaireController@data2');
Route::post('/insertproprietaire', 'PropraitaireController@insert');
Route::post('/updateproprietaire/{id}', 'PropraitaireController@update');
Route::post('/deleteproprietaire/{id}', 'PropraitaireController@destroy')->name('suppprop');


/////////////////////////////// Locataire


Route::get('/Locataire', 'LocataireController@index');
Route::get('/Locataire/{id}/View', 'LocataireController@View');
Route::get('/Locataire/Add', 'LocataireController@storeaf');
Route::get('/Locataire/{id}/ModifierClient', 'LocataireController@updateaf');
Route::get('/Locataire/data', 'LocataireController@data');
Route::get('/Locataire/data2', 'LocataireController@data2');
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




/////////////////////////////// Immeuble


Route::get('/Immeuble', 'ImmeubleController@index');
Route::get('/Immeuble/{id}/View', 'ImmeubleController@View');
Route::get('/Immeuble/Add', 'ImmeubleController@storeaf');
Route::get('/Immeuble/{id}/ModifierClient', 'ImmeubleController@updateaf');
Route::get('/Immeuble/data', 'ImmeubleController@data');
Route::get('/Immeuble/data2', 'ImmeubleController@data2');
Route::post('/insertimmeuble', 'ImmeubleController@insert');
Route::post('/updateimmeuble/{id}', 'ImmeubleController@update');
Route::post('/deleteimmeuble/{id}', 'ImmeubleController@destroy')->name('suppbien');




/////////////////////////////// Location


Route::get('/Location', 'LocationController@index');
Route::get('/Location/Add', 'LocationController@storeaf');
Route::get('/Location/{id}/ModifierClient', 'LocationController@updateaf');
Route::get('/Location/data', 'LocationController@data');
Route::get('/Location/data2', 'LocationController@data2');
Route::post('/insertlocation', 'LocationController@insert');
Route::post('/updatelocation/{id}', 'LocationController@update');
Route::post('/deletelocation/{id}', 'LocationController@destroy')->name('suppbien');



/////////////////////////////// Cronjob
Route::get('/quittance', 'QuittanceController@all');


Route::get('/qtcc', 'QuittanceController@index');
Route::get('/quittance/data', 'QuittanceController@data');