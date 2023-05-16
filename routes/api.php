<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ClientesController;
use App\Http\Controllers\api\CategoriesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//clientes routes
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes',[ClientesController::class,'index'])->name('clientes');
Route::delete('/clientes/{cliente}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
Route::get('/clientes/{cliente}', [ClientesController::class, 'show'])->name('clientes.show');
Route::put('/clientes/{cliente}', [ClientesController::class, 'update'])->name('clientes.update');

//categories routes
Route::post('/categories',[CategoriesController::class,'store'])->name('categories.store');
Route::get('/categories',[CategoriesController::class,'index'])->name('categories');
Route::delete('/categories/{categorie}',[CategoriesController::class,'destroy'])->name('categories.destroy');
Route::get('/categories/{categorie}',[CategoriesController::class,'show'])->name('categories.show');
Route::put('/categories/{categorie}',[CategoriesController::class,'update'])->name('categories.update');

