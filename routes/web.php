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
///////////////////////////////////////////
// Route::get('/myaccount', function(){
//     return view('membercenterpage.myaccount');
// })->name('myaccount');
Route::get('/myaccount',[MyAccountController::class, 'action'])->name('myaccount');

Route::get('/myorder',[MyorderController::class, 'action'])->name('myorder');



// Route::get('/orderdetail', function(){
//     return view('membercenterpage.orderdetail');
// })->name('orderdetail');
Route::get('/orderdetail/{oid}', [MyOrderDetailController::class, 'action'])->name('orderdetail');
Route::get('/coupon', function(){
    return view('membercenterpage.coupon');
})->name('coupon');
Route::get('/favoritelist', function(){
    return view('membercenterpage.favoritelist');
})->name('favoritelist');
Route::get('/cartpage', [CartDetailController::class, 'action'])->name('cartpage');
Route::get('/information', [CartDetailController::class, 'action1'])->name('information');

Route::get('/confirm', function(){
    return view('checkoutpage.confirm');
})->name('confirm');
////////////////////////////////////////////
Route::post('/loginauth',[Auth::class, 'auth']);
Route::get('/logout', function(){
    Cookie::queue(Cookie::forget('token'));
    Cookie::queue(Cookie::forget('name'));
    return redirect('/');
})->name('logout');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'action']);
Route::get('/forgetPassword', [LoginController::class, 'forgetPassword'])->name('forgetPassword');
Route::get('/resetPassword', [LoginController::class, 'resetPassword'])->name('resetPassword');
Route::get('/actionfigure', [ActionFigureController::class, 'action'])->name('actionfigure');

Route::post('/addcart', [CartController::class, 'addcart']);
Route::post('/cart2check', [CartController::class, 'add']);

Route::get('/product/{pid}', [ProductController::class, 'action']);

Route::post('/addcart', [CartController::class, 'addcart']);
Route::post('/cart2check', [CartController::class, 'add']);
Route::get('/navcart', [CartItemController::class, 'action']);
Route::delete('/removecartitem/{cid}', [CartItemController::class, 'deleteitem']);

Route::get('sendmail', [ForgotPWDController::class, 'forgotpwd']);

Route::get('/resetpwd', [ResetPWDController::class, 'resetpage']);
Route::post('/resetpwd', [ResetPWDController::class, 'reset']);

Route::post('/ordersubmit', [OrderController::class, 'order']);
Route::post('/likeitem', [ProductController::class, 'like']);

Route::get('/likelist', [LikeListController::class, 'action'])->name('likelist');

Route::get('/mailtest', function(){
    return view('pwdpage.regissent');
});

Route::post('/updatecart', [UpdateCartController::class, 'updatecart']);

// 拉霸機，抽獎
Route::post('/product/slot/go', [SlotController::class, 'slotPrize']);
Route::get('/product/slot/{pid}', [SlotController::class, 'slot']);
Route::get('/test', [CheckoutController::class, 'sendOrder']);

// 收藏櫃
Route::get('/collection', [CollectController::class, 'show']);
Route::post('/collection/product', [CollectController::class, 'collectDetail']);

// 收藏櫃測試
Route::post('/collectOwn', [CollectController::class, 'showTypes']);
Route::get('/collectOwn', [CollectController::class, 'showTypes']);

