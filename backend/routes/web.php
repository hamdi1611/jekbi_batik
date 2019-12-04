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

Route::get('/api/{id}', function ($id) {
    $temp = new \stdClass();
    $temp->id = (int) $id;
    return response()->json($temp);
});

Route::post('/api', 'TestController@cobaPost');

Route::get('/test/{id}', 'TestController@index');
