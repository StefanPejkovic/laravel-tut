<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;


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

/*::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [RestoController::class, 'index']);
Route::get('/list', [RestoController::class, 'list']);
Route::get('/add', [RestoController::class, 'add']);
Route::post('/add', [RestoController::class, 'add_1']);
Route::get('/delete/{id}', [RestoController::class, 'delete']);
Route::get('/edit/{id}', [RestoController::class, 'edit']);
Route::post('/edit', [RestoController::class, 'update']);
Route::get('/register', [RestoController::class, 'register']);
Route::post('/register', [RestoController::class, 'register_1']);

