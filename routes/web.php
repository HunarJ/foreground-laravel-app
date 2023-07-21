<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');



// Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register')->middleware('guest');

Route::post('/login', [AuthController::class, 'postLogin'])->name('login')->middleware('guest');
Route::post('/register', [AuthController::class, 'postRegister'])->name('register')->middleware('guest');


Route::post('/create', [ContactController::class, 'saveContact'])->name('saveContact');

Route::get('/service-{url}', [PagesController::class, 'detail'])->name('detail');


//Admin panel routes
Route::group(['prefix' => 'admin', 'middewarw' => 'auth'], function(){
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin')->middleware('auth');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
    //Services routes
    Route::group(['prefix' => 'services'], function(){
        Route::get('/', [ServiceController::class, 'index'])->name('admin.services');
        Route::get('/create', [ServiceController::class, 'create'])->name('admin.create');
        Route::get('/{id}', [ServiceController::class, 'editService'])->name('admin.edit');
        Route::post('/create', [ServiceController::class, 'saveService'])->name('admin.saveService');
        Route::delete('/{id}', [ServiceController::class, 'deleteService'])->name('admin.deleteService');
        Route::put('/{id}', [ServiceController::class, 'updateService'])->name('admin.editService');
    });

    //Contact routes
    Route::group(['prefix' => 'contacts'], function(){
        Route::get('/', [ContactController::class, 'index'])->name('admin.contacts');
        Route::delete('/{id}', [ContactController::class, 'deleteContact'])->name('admin.deleteContact');
    });
});

