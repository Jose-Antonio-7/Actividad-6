<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResourceController;//Se añade para que se reconozca la ruta del controlador
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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [ResourceController::class, 'index']);
Route::get('/edit', [ResourceController::class, 'edit']);
Route::get('/create', [ResourceController::class, 'create']);