<?php

use App\Http\Controllers\MypageController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

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

Route::get('/mylist', [ItemController::class, 'myList'])->middleware('auth')->name('mylist');

Route::get('/', [ItemController::class, 'index'])->name('home');

Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::get('/login', [LoginController::class, 'ShowLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/item/{item_id}', [ItemController::class, 'show'])->name('item.show');

Route::get('/mypage', [MypageController::class, 'index'])->name('mypage');

Route::get('/sell', [ItemController::class, 'create'])->middleware('auth')->name('items.create');
Route::post('/sell', [ItemController::class,'store'])->middleware('auth')->name('items.store');

Route::middleware(['auth'])->group(function(){
    Route::get('/mypage/profile',[ProfileController::class,'edit'])->name('profile.edit');
    Route::put('/mypage/profile', [ProfileController::class,'update'])->name('profile.update');
});

Route::post('/items/{item}/comments', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');

