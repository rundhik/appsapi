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

Route::get('/ketua', function () {
    return view('ketua');
})->middleware('auth:ketua');

Route::get('/', function () {
    return view('login');
})->middleware('guest');

Route::resource('user', 'login@masuk');
Route::get('/user', 'login@masuk');

Route::get('/keluar', 'login@keluar');

Route::resource('anggotaadms', 'anggotaadmController')->middleware('auth:admin');
	Route::get('getwilayah', 'anggotaadmController@getwilayah');	
	Route::get('getkelompok/{sembarang}', 'anggotaadmController@getkelompok');

Route::group(['middleware' => ['web']], function(){
	Route::resource('sapiadms', 'SapiadmController')->middleware('auth:admin');
	Route::GET('sapiadms/{id_anggota}/update/{id_sapi}', 'SapiadmController@update')->middleware('auth:admin');
	Route::GET('sapiadms/{id_anggota}/editsapi/{id_sapi}', 'SapiadmController@edit')->middleware('auth:admin');
	Route::POST('/sapiadms/{request}', 'SapiadmController@update')->middleware('auth:admin');
});


Route::resource('admins', 'adminController')->middleware('auth:admin');



Route::group(['middleware' => ['web']], function(){
Route::get('koordinator/{id}', 'koordinatorController@index')->middleware('auth:koordinator');
Route::get('koordinator/{id}/anggota', 'koordinatorController@anggota')->middleware('auth:koordinator');
Route::get('koordinator/{id}/anggota/{id_anggota}', 'koordinatorController@detail')->middleware('auth:koordinator');
Route::resource('koordnator', 'koordinatorController')->middleware('auth:koordinator');
Route::get('koordinator/{id}/sapi', 'koordinatorController@sapi')->middleware('auth:koordinator');
Route::get('koordinator/{id}/sapi/{id_anggota}', 'koordinatorController@detailsapi')->middleware('auth:koordinator');
Route::resource('koordinator', 'koordinatorController')->middleware('auth:koordinator');
Route::GET('koordinator/{id}/sapi/{id_anggota}/update/{id_sapi}', 'SapiadmController@update')->middleware('auth:koordinator');
Route::GET('koordinator/{id}/sapi/{id_anggota}/editsapi/{id_sapi}', 'SapiadmController@edit')->middleware('auth:koordinator');
Route::POST('koordinator/{id}/sapi/{request}', 'koordinatorController@update')->middleware('auth:koordinator');
});

Route::group(['middleware' => ['web']], function(){
Route::resource('pengurus', 'pengurusController')->middleware('auth:pengurus');
Route::get('anggota', 'pengurusController@anggota')->middleware('auth:pengurus');
Route::get('anggota/{id}', 'pengurusController@detail')->middleware('auth:pengurus');
Route::resource('pengurus', 'pengurusController')->middleware('auth:pengurus');
Route::get('sapi', 'pengurusController@sapi')->middleware('auth:pengurus');
Route::get('sapi/{id}', 'pengurusController@detailsapi')->middleware('auth:pengurus');
Route::resource('pengurus', 'pengurusController')->middleware('auth:pengurus');
});

Route::group(['middleware' => ['web']], function(){
Route::get('ketua/{id}', 'ketuaController@index')->middleware('auth:ketua');
Route::get('ketua/{id}/anggota', 'ketuaController@anggota')->middleware('auth:ketua');
Route::get('ketua/{id}/anggota/{id_anggota}', 'ketuaController@detail')->middleware('auth:ketua');
Route::resource('ketua', 'ketuaController')->middleware('auth:ketua');
Route::get('ketua/{id}/sapi', 'ketuaController@sapi')->middleware('auth:ketua');
Route::get('ketua/{id}/sapi/{id_anggota}', 'ketuaController@detailsapi')->middleware('auth:ketua');
Route::resource('ketua', 'ketuaController')->middleware('auth:ketua');
Route::GET('ketua/{id}/sapi/{id_anggota}/update/{id_sapi}', 'SapiadmController@update')->middleware('auth:ketua');
Route::GET('ketua/{id}/sapi/{id_anggota}/editsapi/{id_sapi}', 'SapiadmController@edit')->middleware('auth:ketua');
Route::POST('ketua/{id}/sapi/{request}', 'ketuaController@update')->middleware('auth:ketua');
});







