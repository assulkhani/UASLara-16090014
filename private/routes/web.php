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

// Route::get('/votingOnline', function () {
//     return view('templates.default');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('about', function () {
    return view('about');
});
// Route::get('/sekilas_pandang', function(){
// 	return view('projek.sekilas_pandang');
// });

Route::get('/input_data_calon', function () {
    return view('projek.input_data_calon');
});

Route::get('/report', function () {
    return view('projek.report');
});
/*Route::get('karyawan1',function(){
	$karyawan=['Munawar','Budi Santoso','Widya Ningrum','Unggul Jaya'];
	return view('pages.karyawan',compact('karyawan'));
});*/

//Route::get('karyawan','BelajarController@index');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/admin'], function(){
  Route::get('/calon', 'CalonController@index')->name('calon');
  Route::get('/calon/create', 'CalonController@create')->name('calon.create');
  Route::post('/calon/create', 'CalonController@store')->name('calon.store');
  Route::get('/calon/edit/{id}', 'CalonController@edit')->name('calon.edit');
  Route::patch('/calon/edit/{id}', 'CalonController@update')->name('calon.update');
  Route::get('/calon/destroy/{id}', 'CalonController@destroy')->name('calon.destroy');

  Route::get('/pemilih', 'PemilihController@index')->name('pemilih');
  Route::get('/pemilih/create', 'PemilihController@create')->name('pemilih.create');
  Route::post('/pemilih/create', 'PemilihController@store')->name('pemilih.store');
  Route::get('/pemilih/edit/{id}', 'PemilihController@edit')->name('pemilih.edit');
  Route::patch('/pemilih/edit/{id}', 'PemilihController@update')->name('pemilih.update');
  Route::get('/pemilih/destroy/{id}', 'PemilihController@destroy')->name('pemilih.destroy');

  Route::get('/dashboard', 'PemilihController@dashboard')->name('dashboard');


});
