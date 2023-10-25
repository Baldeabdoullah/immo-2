<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\OptionController;
use App\Http\Controllers\admin\PropertyController;
use App\Http\Controllers\front\AccueilController;
use App\Http\Controllers\front\FrontPropertyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin', [AdminController::class, 'index']);
Route::resource('properties', PropertyController::class);
Route::resource('options', OptionController::class);
Route::resource('categories', CategoryController::class);

//front
Route::get('/', [AccueilController::class, 'index'])->name('accueil');
Route::get('/biens', [FrontPropertyController::class, 'index'])->name('biens');
Route::get('/bien/{id}', [FrontPropertyController::class, 'show'])->name('bien');
Route::get('/infos', [FrontPropertyController::class, 'infos'])->name('infos');
Route::get('/services', [FrontPropertyController::class, 'services'])->name('services');
Route::get('/contacte', [FrontPropertyController::class, 'contacte'])->name('contacte');

Route::post('/bien/{id}', [FrontPropertyController::class, 'store'])->name('order');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
