<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

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

Route::get('/about/{name}/{class}', [AboutController::class, 'show']);

Route::get('/form', [AboutController::class, 'form']);
Route::post('/form/prosess', [AboutController::class, 'form_proses']);