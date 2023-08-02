<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

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

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', [HomeController::class, 'action'])->name('index');
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('authmember');
Route::get('/membercenter', function(){
    return view('membercenter');
})->name('membercenter');
Route::post('/loginauth',[Auth::class, 'auth']);
Route::get('/logout', function(){
    Cookie::queue(Cookie::forget('token'));
    return redirect('/');
})->name('logout');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/forgetPassword', [LoginController::class, 'forgetPassword'])->name('forgetPassword');
Route::get('/actionfigure', [ActionFigureController::class, 'action'])->name('actionfigure');
// Route::get('/product/{pid}', ProductController::class);

// 拉霸機，抽獎
Route::get('/product/slot/go', [SlotController::class, 'slotPrize']);
Route::get('/product/slot/{pid}', [SlotController::class, 'slot']);


