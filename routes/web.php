<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\AdminPostsController;
use App\Http\Middleware\Admin;

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
Route::group(['middleware'=>'admin'], function(){

    // admin users
    Route::resource('/admin/users', AdminUsersController::class);

    Route::get('/users/index', [AdminUsersController::class, 'index'])->name('admin.users.index');

    Route::get('/users/create', [AdminUsersController::class, 'create'])->name('admin.users.create');

    Route::get('/users/edit/{id}', [AdminUsersController::class, 'edit'])->name('admin.users.edit');

    // admin posts

    Route::resource('/admin/posts', AdminPostsController::class);
    
    Route::get('/posts/index', [AdminPostsController::class, 'index'])->name('admin.posts.index');

    Route::get('/posts/create', [AdminPostsController::class, 'create'])->name('admin.posts.create');

    Route::get('/posts/edit/{id}', [AdminPostsController::class, 'edit'])->name('admin.posts.edit');


});


Route::get('/admin', function(){

    return view('admin.index');

});