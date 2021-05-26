<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUsersController;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home/{name?}', [HomeController::class, 'index'])->name('home.index');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Route::get('/admin/users', [AdminUsersController::class, 'index'])->name('admin.users.index');

// Route::get('/admin/users/create', [AdminUsersController::class, 'create'])->name('admin.users.create');

Route::resource('/admin/users', AdminUsersController::class);

Route::get('/admin', function(){

    return view('admin.index');

});