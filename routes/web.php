<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PitchController;
use App\Http\Controllers\CompanyController;
use \App\Http\Controllers\ModuleController;
use \App\Http\Controllers\PostController;

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
Route::get('/farno-char', [ModuleController::class, 'index'])->name('module');
Route::get('/farno-char/category/{id}', [PostController::class, 'index'])->name('news');
Route::get('/farno-char/news/{id}', [PostController::class, 'getPost'])->name('post');

Route::get('/', function () {
	return view('welcome');
})->name('welcome');


Route::get('/policy', function () {
	return view('policy');
})->name('policy');

Route::get('/home', function () {
	return view('dashboard');
})->name('home')->middleware('auth');

// Authentication routes:
Route::get('login', [AuthController::class, 'create'])->name('login');

Route::post('login', [AuthController::class, 'postLogin']);

Route::get('login/confirm', [AuthController::class, 'confirm'])->name('confirm');

Route::get('/auth/token/{token}', [AuthController::class, 'authenticate']);

Route::post('/auth/token', [AuthController::class, 'postAuthenticate'])->name('postAuthenticate');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('user-pitch', PitchController::class)->middleware('auth');

Route::resource('company-information', CompanyController::class)->middleware('auth')->parameters([
	'company-information' => 'company',
]);;


Route::group(['prefix' => 'admin'], function () {
	Voyager::routes();
});