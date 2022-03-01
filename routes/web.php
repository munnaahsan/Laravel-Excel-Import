<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/import', 'ProductController@index');
Route::post('/export', 'ProductController@postImport');


// Route::prefix('api')->group(function () {
//     Route::get('getContact', 'ContactController@getcontacts');
// });


Route::get('/users/import', 'ProductImportController@show');
Route::post('/users/import', 'ProductImportController@store');
