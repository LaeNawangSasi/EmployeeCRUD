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

Route::get('/tolong dicoba', function () {
    echo "awal percobaan";
});

Route::get('/sudah dicoba', function () {
    echo "proses";
});

Route::get('/try', function () {
    return view ('masih_dicoba');
});
//pakai kontroler
Route::get('/satu', 'TrialController@index'); 

//memanggil controller
//capung dengan fungsi pujangga
Route::get('/dua', 'TrialController@pujangga'); 

Route::get('/dua/tiga', 'TrialController@siti'); 
Route::resource('Customer','CustomerController');
Route::resource('Supplier','SupplierController');
Route::resource('Employee','EmployeeController');