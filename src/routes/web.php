<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


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

//ContactForm
Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerUser']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/admin', [AuthController::class, 'admin'])->name('admin');

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/search', [AdminController::class, 'find']);
Route::post('/search', [AdminController::class, 'search']);

// Route::post('/admin', [AuthController::class, 'admin']);

//guest
// Route::middleware('guest')->group(function (){
//     Route::get('/register', [AuthController::class, 'register'])->name('register');
//     Route::post('/register', [AuthController::class, 'registerUser']);

//     Route::get('/login', [AuthController::class, 'login'])->name('login');
//     Route::post('/login', [AuthController::class, 'loginUser']);
// });

//Auth
// Route::middleware('auth')->group(function (){
//     Route::get('/admin', function() {
//         return view('admin');
//     })->name('admin');
// });