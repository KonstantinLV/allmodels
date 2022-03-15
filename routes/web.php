<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\IndexController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

// Admin panel routes
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/admin', [ModelController::class,'index']);
    Route::get('/add-model', [ModelController::class,'getAddModel']);
    Route::post('/add-model', [ModelController::class,'addModel']);
});

Route::get('/all-collections',[IndexController::class, 'allCollections'])->name('allcollections');
Route::get('/my-collection',[IndexController::class, 'myCollection'])->name('mycollection');
Route::get('/edit-collection',[IndexController::class, 'editCollection'])->name('editcollection');
