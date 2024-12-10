<?php

use App\Http\Controllers\frontPageController;
use App\Http\Controllers\BackPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Front Page
Route::get('/user/landing', [frontPageController::class, 'index'])->name('landing');
Route::get('/user/books', [frontPageController::class, 'books'])->name('books');
Route::get('search', [frontPageController::class, 'search'])->name('search');
Route::get('/user/booksDetail/{id_books}', [frontPageController::class, 'booksDetail'])->name('booksDetail');
Route::get('/user/reading-page/{id_books}/{title}', [frontPageController::class, 'readingPage'])->name('readingPage');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Page
    Route::get('/admin/dashboard', [BackPageController::class, 'index'])->name('admin');
    Route::get('/admin/allBooks', [BackPageController::class, 'allBooks'])->name('allBooks');
    Route::get('/admin/allBooks/addForm', [BackPageController::class, 'addForm'])->name('addForm');
    Route::post('/admin/allbooks/store', [BackPageController::class, 'store'])->name('store');
    Route::get('admin/edit/{id_books}', [BackPageController::class,'edit'])->name('edit');
    Route::put('admin/update/{id_books}', [BackPageController::class,'update'])->name('update');
    Route::get('admin/destroy/{id_books}', [BackPageController::class,'destroy'])->name('destroy');
    Route::get('/admin/history', [BackPageController::class, 'history'])->name('history');
    Route::get('filter', [BackPageController::class,'filter'])->name('filter');
});

require __DIR__.'/auth.php';
