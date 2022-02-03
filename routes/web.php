<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DownloadController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [AdController::class, 'index'])->name('index.ad');
Route::get('/jobs', [AdController::class, 'index'])->name('index.ad');
// Route::get('/jobs/', [AdController::class, 'index'])->name('index.ad');
Route::get('/jobs/index', [AdController::class, 'index'])->name('index.ad');

Route::get('/jobs/create', [AdController::class, 'create'])->name('create.ad');
Route::post('/jobs/create', [AdController::class, 'create'])->name('create.ad');

Route::get('/jobs/view/{ad}', [AdController::class, 'view'])->name('view.ad');
Route::get('/jobs/view/update/{ad}', [AdController::class, 'update'])->name('update.ad');
Route::post('/jobs/view/update/{ad}', [AdController::class, 'update'])->name('update.ad');
Route::delete('/jobs/view/{ad}', [AdController::class, 'delete'])->name('delete.ad');
Route::post('/jobs/view/{ad}', [AppController::class, 'create'])->name('create.app');

Route::get('/jobs/applications', [AppController::class, 'index'])->name('index.app');

Route::get('/jobs/applications/view/{app}', [AppController::class, 'view'])->name('view.app');
Route::delete('/jobs/applications/view/{app}', [AppController::class, 'delete'])->name('delete.app');

Route::post('/signout', [LogoutController::class, 'store'])->name('signout');

Route::get('/download/{app}', [DownloadController::class, 'download'])->name('download');

Route::get('/signin', [LoginController::class, 'index'])->name('login');
Route::post('/signin', [LoginController::class, 'store']);


//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
