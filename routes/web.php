<?php

use Illuminate\Support\Facades\Route;
use App\Models\LoginUser_;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Product;



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

//  Home Route
Route::get('/',[Product::class,'getAllData'])->name('getAllData');

//  Just Testing Routes
// Route::view('/header','header');
// Route::view('/footer','footer');
// Route::view('/main','main');
// Route::view('/login','login');

// Collection Page
Route::get('/collection',[Product::class,'showProd'])->name('showProd');

//  Special Product Page
Route::get('/special_prod',[Product::class,'special_prod'])->name('special_prod');


//SignUP Page
Route::get('/signup',[Controller::class,'signup'])->name('signup');
Route::post('/signup',[Controller::class,'store'])->name('storeData');


//Login Page
Route::get('/login',[Controller::class,'loginView'])->name('loginView');
Route::post('/login',[Controller::class,'login'])->name('login');

//  Logout Page
Route::get('/logout',function(){
    session()->forget(['user','name','id']);
    return redirect('/');
});  


// Adding Products
Route::get('/add-prod',[Product::class,'ProdView'])->name('ProdView');
Route::post('/add-prod',[Product::class,'AddProd'])->name('AddProd');

// Getting Products
Route::get('/show-prod',[Product::class,'showProd'])->name('showProd');


// Product Detail Page
Route::get('prod_detail/{id}',[Product::class,'prod_detail'])->name('prod_detail');


//  Add to Cart
Route::get('/cart/{id}',[Product::class,'cart'])->name('cart');
Route::get('/removecart/{id}',[Product::class,'removecart'])->name('removecart');

// Getting Cart Items
Route::get('cartlist',[Product::class,'cartlist'])->name('cartlist');


//  Ordering Products
Route::get('orders',[Product::class,'orders'])->name('orders');
// Payment
Route::post('orders',[Product::class,'Order_pay'])->name('Order_detail');

// Final Order Summary After Payment
Route::get('order_summary',[Product::class,'order_summary'])->name('order_summary');


Route::get('search',[Product::class,'search'])->name('search');
