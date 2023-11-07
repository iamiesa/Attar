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

Route::get('/', function () {
    return view('index');
});

Route::view('/header','header');
Route::view('/footer','footer');
Route::view('/main','main');
Route::view('/login','login');

//SignUP Page
Route::get('/signup',[Controller::class,'signup'])->name('signup');
Route::post('/signup',[Controller::class,'store'])->name('storeData');

//Login Page
Route::get('/login',[Controller::class,'loginView'])->name('loginView');
Route::post('/login',[Controller::class,'login'])->name('login');


Route::get('/logout',function(){
    session()->forget(['user','name','id']);
    return redirect('/');
});


Route::get('/add-prod',[Product::class,'ProdView'])->name('ProdView');
Route::post('/add-prod',[Product::class,'AddProd'])->name('AddProd');

Route::get('/show-prod',[Product::class,'showProd'])->name('showProd');
Route::get('/',[Product::class,'getAllData'])->name('getAllData');



Route::get('prod_detail/{id}',[Product::class,'prod_detail'])->name('prod_detail');

Route::view('detail','prod_detail');


// Route::get('/model',function(){
//     $data = LoginUser_::all();
//     echo "<pre>";
//     print_r($data->toArray());

// });


