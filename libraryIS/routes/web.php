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
    return view('welcome');
});

Auth::routes();

Route::resource('user', UserController::class);
Route::resource('member', MemberController::class);
Route::resource('book', BookController::class);
Route::resource('record', RecordController::class);

Route::put('record/{record}/return', [RecordController::class, 'return'] )->name('record.return');
Route::get('search', [SearchController::class, 'index'])->name('search.index');
Route::get('search/record', [SearchController::class, 'search'])->name('search.record');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
