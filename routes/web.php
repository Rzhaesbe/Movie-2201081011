<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZailanyController;


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

Route::get('/', [ZailanyController::class, 'index']);
Route::get('/movie/{id}', [ZailanyController::class, 'detail']);
Route::get('/search',[ZailanyController::class, 'search']);

