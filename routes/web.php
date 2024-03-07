<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index']);
Route::get('/about', [FrontController::class, 'about'])->name('about.page');
Route::get('/services', [FrontController::class, 'service'])->name('services.page');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog.page');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact.page');
Route::get('/terms', [FrontController::class, 'terms'])->name('terms.page');
Route::post('/message',[FrontController::class, 'contactMessage'])->name('message.page');
