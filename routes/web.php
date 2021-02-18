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

Route::get('/', 'PageController@kuce');
Route::get('/rente', 'PageController@rente');

Route::get('/kuca/load', 'KucaController@loadKuce');
Route::delete('/kuca/delete', 'KucaController@deleteKuca');
Route::post('/kuca/insert', 'KucaController@insertKuca');

Route::post('/renta/insert', 'RentaController@insertRenta');
Route::get('/rente', 'RentaController@loadRente');
