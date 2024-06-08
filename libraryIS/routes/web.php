<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();

Route::resource('user', UserController::class)->middleware('auth');
Route::resource('member', MemberController::class)->middleware('auth');
Route::resource('book', BookController::class)->middleware('auth');
Route::resource('record', RecordController::class)->middleware('auth');

Route::put('record/{record}/return', [RecordController::class, 'return'] )->name('record.return')->middleware('auth');
Route::get('search', [SearchController::class, 'index'])->name('search.index')->middleware('auth');
Route::get('search/record', [SearchController::class, 'search'])->name('search.record')->middleware('auth');
Route::get('book/filter/available', [BookController::class, 'filter'])->name('book.available')->middleware('auth');
Route::view('profile', 'profile.show')->name('profile.show')->middleware('auth');
Route::put('profile/password/{user}', [UserController::class, 'password'])->name('user.password')->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
