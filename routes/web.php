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
    return view('layouts.first');
});

Route::get('/qa', function () {
    return view('layouts.login');
}) ;



Route::get('/qaa', function () {
    return view('reservation.add');
}) ;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/////////////////////////////// Propraitaire

Route::middleware('auth')->group(function () {
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
Route::get('/Location/Edit/{id}', 'LocationController@updateaf')->name('editlocat');;
Route::get('/Location/data', 'LocationController@data');
Route::get('/Location/data2', 'LocationController@data2');

Route::get('/locatiarchive/{id}', 'LocationController@archive')->name('locatiarchive');

Route::get('/locationdarchive/{id}', 'LocationController@deachive')->name('locationdearchive');

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

Route::get('/quittance/add', 'QuittanceController@add41');
Route::post('/quittance/add/qtc', 'QuittanceController@ar21');
/////////////////////////////// Bank


Route::get('/Banks', 'BankController@index');
Route::get('/Bank/{id}/Add', 'BankController@storeaf');
Route::get('/Bank/Add', 'BankController@storeaf2');
Route::post('bankinsert/{id}', 'BankController@insert');
Route::post('bankinsertq', 'BankController@insert2');
Route::get('/Bank/data', 'BankController@data');
Route::get('/banksdelete/{id}', 'BankController@destroy')->name('banksdelete');


/////// Documents


Route::get('/Documents', 'DocumentController@index');
Route::get('/Document/Add', 'DocumentController@storeaf');
Route::get('/Document/Add/{id}', 'DocumentController@storeaf2');
Route::post('/documentinsert', 'DocumentController@insert');
Route::post('/documentinsertq/{id}', 'DocumentController@insert2');
Route::get('/Document/data', 'DocumentController@data');
Route::get('/documentdelete/{id}', 'DocumentController@destroy')->name('documedelete');




///image edit  


Route::get('/Imagetraitment', 'ImageeditController@index');
Route::post('/Imagetraitmentq', 'ImageeditController@Imagetraitment');




///Caution 
Route::get('/Caution', 'CautionController@index');
Route::get('/Caution/Add', 'CautionController@storeaf');
Route::post('/cautioninsert', 'CautionController@insert');
Route::get('/Caution/data/{id}', 'CautionController@data');
Route::get('/cautiondelete/{id}', 'CautionController@destroy')->name('cautiondelete');
Route::get('/cautionarchive/{id}', 'CautionController@Archive')->name('cautionarchive');
Route::get('/Caution/recu/{id}', 'CautionController@recu')->name('cautionrecu');



//Frais
Route::get('/Fraisagence', 'AgencefraiController@index');
Route::get('/Fraisagence/Add', 'AgencefraiController@storeaf');
Route::post('/fraisinsert', 'AgencefraiController@insert');
Route::get('/Fraisagence/data/{id}', 'AgencefraiController@data');
Route::get('/fraisdelete/{id}', 'AgencefraiController@destroy')->name('fraisdelete');
Route::get('/fraisarchive/{id}', 'AgencefraiController@Archive')->name('fraisarchive');
Route::get('/Fraisagence/recu/{id}', 'AgencefraiController@recu')->name('fraisrecu');


});