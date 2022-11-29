<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\LandingController;

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

Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/article', [ArticleController::class, 'index'])->name('index');

Route::prefix('institution')->name('institution.')->group(function () {
    Route::get('/', [InstitutionController::class, 'index'])->name('index');
    Route::get('/peserta', [InstitutionController::class, 'peserta'])->name('peserta');
    Route::get('/peserta/1', [InstitutionController::class, 'detail'])->name('detail');
    Route::get('/screening', [InstitutionController::class, 'screening'])->name('screening');
    Route::get('/chat', [InstitutionController::class, 'chat'])->name('chat');
    Route::get('/disease', [InstitutionController::class, 'disease'])->name('disease');
    Route::get('/stroke', [InstitutionController::class, 'stroke'])->name('stroke');
    Route::get('/kardiovaskular', [InstitutionController::class, 'kardiovaskular'])->name('kardiovaskular');
    Route::get('/diabetes', [InstitutionController::class, 'diabetes'])->name('diabetes');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/institution-list', [AdminController::class, 'institutionList'])->name('institutionList');
});