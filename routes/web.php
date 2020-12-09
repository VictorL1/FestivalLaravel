<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fonction;



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

Route::get('gestion', [fonction::class, 'etablissement']);

Route::get('/detailEtablissement', [fonction::class, 'obtenirDetailEtablissement']);

Route::get('/modificationEtablissement', [fonction::class, 'modifetablissement']);

Route::post('/updateetablissement', [fonction::class, 'updateetablissement']);

Route::get('/creationEtablissement', function () {
    return view('creationEtablissement');
});

Route::post('/creationexec', [fonction::class, 'creationexec']);

Route::get('/attributions', function () {
    return view('attributions');
});