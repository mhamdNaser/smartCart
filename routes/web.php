<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestpruductController;
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

Route::get('/', [TestpruductController::class, 'index']);
Route::post('/import_product', [TestpruductController::class, 'store'])->name('import_product');

