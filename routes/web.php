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

Route::get('/proparchive/{id}', 'PropraitaireController@archive')->name('proparchive');
Route::get('/propdlete/{id}', 'PropraitaireController@destroy')->name('propdelete');


Route::post('/insertproprietaire', 'PropraitaireController@insert');
Route::post('/updateproprietaire/{id}', 'PropraitaireController@update');
Route::post('/deleteproprietaire/{id}', 'PropraitaireController@destroy')->name('suppprop');


/////////////////////////////// Locataire


Route::get('/Locataire', 'LocataireController@index');
Route::get('/Locataire/{id}/View', 'LocataireController@View');
Route::get('/Locataire/dataquittance/{id}', 'LocataireController@dataquit');

Route::get('/Locataire/Add', 'LocataireController@storeaf');
Route::get('/Locataire/{id}/ModifierClient', 'LocataireController@updateaf');
Route::get('/Locataire/data', 'LocataireController@data');
Route::get('/Locataire/data2', 'LocataireController@data2');

Route::get('/locaarchive/{id}', 'LocataireController@archive')->name('locaarchive');
Route::get('/locadlete/{id}', 'LocataireController@destroy')->name('locadelete');

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
Route::get('/bienarchive/{id}', 'BienController@archive')->name('bienarchive');
Route::get('/deletebien/{id}', 'BienController@delebien')->name('deletebienn');
Route::post('/insertbien', 'BienController@insert');
Route::post('/updatebien/{id}', 'BienController@update');






/////////////////////////////// Immeuble


Route::get('/Immeuble', 'ImmeubleController@index');
Route::get('/Immeuble/{id}/View', 'ImmeubleController@View');
Route::get('/Immeuble/Add', 'ImmeubleController@storeaf');
Route::get('/Immeuble/{id}/ModifierClient', 'ImmeubleController@updateaf');
Route::get('/Immeuble/data', 'ImmeubleController@data');
Route::get('/Immeuble/data2', 'ImmeubleController@data2');
Route::get('/immeublearchive/{id}', 'ImmeubleController@archive')->name('immeblearchive');
Route::get('/immeubledlete/{id}', 'ImmeubleController@destroy')->name('immebledelete');
Route::post('/insertimmeuble', 'ImmeubleController@insert');
Route::post('/updateimmeuble/{id}', 'ImmeubleController@update');





/////////////////////////////// Location


Route::get('/Location', 'LocationController@index');
Route::get('/Location/Add', 'LocationController@storeaf');
Route::get('/Location/{id}/ModifierClient', 'LocationController@updateaf');
Route::get('/Location/data', 'LocationController@data');
Route::get('/Location/data2', 'LocationController@data2');

Route::get('/locatiarchive/{id}', 'LocationController@archive')->name('locatiarchive');
Route::get('/locatidlete/{id}', 'LocationController@destroy')->name('locatiadelete');


Route::post('/insertlocation', 'LocationController@insert');
Route::post('/updatelocation/{id}', 'LocationController@update');
Route::post('/deletelocation/{id}', 'LocationController@destroy')->name('suppbien');



/////////////////////////////// Cronjob
Route::get('/qtcc', 'QuittanceController@all');
Route::get('/quittance', 'QuittanceController@index');
Route::get('/quittance/data/{id}', 'QuittanceController@data');
Route::get('/quittance/recu/{id}', 'QuittanceController@recu')->name('recuquittance');
Route::get('/quittance/valide/{id}', 'QuittanceController@valide')->name('recuvalide');
Route::get('/quittance/delete/{id}', 'QuittanceController@delete')->name('deletequit');
Route::get('/quittanceimp', 'QuittanceController@index2');
Route::post('/Searchquitdate', 'QuittanceController@search');
Route::get('/quittance/data/{month}/{year}', 'QuittanceController@dataser');


