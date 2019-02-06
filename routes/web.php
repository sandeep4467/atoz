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
    return view('index');
});

Route::get('/idd', function () {
    return view('idd');
});

Route::get('/ff', function () {
    return view('ff');
});

Route::get('/sutability', function () {
    return view('sutability');
});

Route::get('/fee-agreement', function () {
    return view('fee-agreement');
});

Route::post('idd', 'PdfController@getPDF1');
Route::post('ff', 'PdfController@getPDF2');
Route::post('sutability', 'PdfController@getPDF3');
Route::post('fee-agreement', 'PdfController@getPDF4');
