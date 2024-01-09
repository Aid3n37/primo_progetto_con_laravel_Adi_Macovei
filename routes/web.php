<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
/*parte uno del 09/01/2024*/
Route::get('/stringa', function () {
    return 'Esempio Stringa';
});

Route::get('/intero', function(){
    return '1' ;
});

Route::get('/array', function(){
    return 'ci dovrebbe essere un array';
});
/*parte 2 traccia del 09/01/2024*/
Route::get('/chisiamo', function () {
    return view('chisiamo');
});
Route::get('/contatti', function () {
    return view('contatti');
});
Route::get('/storia', function () {
    return view('storia');
});
