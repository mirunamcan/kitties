<?php

use App\Models\Animal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimauxController;
use function Laravel\Prompts\error;

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
Route::get('/animaux', [AnimauxController::class, 'index'])->name('index');

Route::get('/animaux/create', [AnimauxController::class, 'create'])->name('create');

Route::post('/animaux', [AnimauxController::class, 'store'])->name('store');

Route::delete('/animaux/{id}', [AnimauxController::class, 'delete'])->name('delete');

Route::get('/animaux/{id}', [AnimauxController::class, 'show'])->name('show');

Route::get('/animaux/{id}/edit', [AnimauxController::class, 'edit'])->name('editer');

Route::patch('/animaux/{id}', [AnimauxController::class, 'update'])->name('update');

Route::get('/', function () {
    return view('welcome');
});
