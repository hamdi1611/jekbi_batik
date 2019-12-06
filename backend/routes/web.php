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

Route::get('/dashboard', 'BarangController@dashboard');

Route::get('/air', function () { return view('air'); });
Route::get('/air_history', 'AirListrikController@air_history');

Route::get('/energi', function () { return view('energi'); });
Route::get('/energi_history', 'AirListrikController@listrik_history');

Route::get('/management', function () { return view('management'); });
Route::get('/management_history', 'BarangController@management_history');

Route::get('/sampah', function () { return view('sampah'); });
Route::get('/sampah_history', 'BarangController@sampah_history');

Route::get('/sharing', 'BarangController@sharing');

Route::get('/konsultasi', function () { return view('konsultasi'); });

Route::post('/add/air', 'AirListrikController@add_air');
Route::post('/add/listrik', 'AirListrikController@add_listrik');
Route::post('/add/sampah', 'BarangController@add_sampah');
Route::post('/add/management', 'BarangController@add_management');

Route::get('/pinjam', 'AirListrikController@pinjam');


Route::get('/api/{id}', function ($id) {
    $temp = new \stdClass();
    $temp->id = (int) $id;
    return response()->json($temp);
});

Route::post('/api', 'TestController@cobaPost');

Route::get('/test/{id}', 'TestController@index');
