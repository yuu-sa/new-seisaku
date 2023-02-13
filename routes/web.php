<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Buth\ButhController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ChatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', [AuthController::class,'showLogin'])->name('showLogin');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');

Route::get('/touroku', [ButhController::class,'showtouroku'])->name('showtouroku');
Route::post('/touroku',[ButhController::class, 'touroku'])->name('register');

Route::get('/item_register', [ItemController::class, 'index_r']);
Route::post('/item_register', [ItemController::class, 'create']);

Route::get('/item_update/{id}', [ItemController::class, 'index_u']);
Route::post('/item_update/{id}', [ItemController::class, 'update']);

Route::get('/home', [UserController::class, 'index'])->name('home');
Route::get('/item_list', [ItemController::class, 'index'])->name('item_list');

Route::get('/chat', [ChatController::class,'chat'])->name('chat');

Route::post('/item_list', function (Request $request) {
    Storage::put('public', $request->image);
});
