<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\forms;
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
    return view('index');
})->middleware('alreadyLoggedIn');
Route::get('/dashboard', [forms::class, 'dashboard'])->middleware('isLoggedIn');

Route::get('/register', function () {
    return view('register');
})->middleware('alreadyLoggedIn');
Route::post('/register-user',[forms::class, 'registerUser'])->name('regsiter-user');
Route::post('/login-user',[forms::class, 'login'])->name('login-user');
Route::get('logout',[forms::class, 'logout']);
Route::post('/employee',[forms::class, 'employee'])->name('employee');
Route::get('/delete/{id}',[forms::class, 'delete'])->name('delete');
Route::post('/update',[forms::class, 'update'])->name('update');