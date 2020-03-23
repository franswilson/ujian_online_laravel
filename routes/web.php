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

Route::get('/soal', 'SoalController@getSoal');
Route::get('/jawaban', 'SoalController@getJawaban');
Route::get('/data_nilai', 'NilaiController@index');
Route::post('submit-jawab', 'SubmitJawabController@store')->name('jawab.store');

Route::get('/', function () {
    return view('ujian');
});
