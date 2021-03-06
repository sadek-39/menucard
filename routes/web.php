<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\QRCode;
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

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/registerform',[UserController::class,'index'])->name('registerform');
Route::post('/register',[UserController::class,'create'])->name('register');
Route::post('/addnewfood',[FoodController::class,'index'])->name('add-new-food');
Route::get('/menu-card/{id}',[MenuController::class,'index'])->name('menu-card');
Route::get('/generate-qrcode', [QrCode::class, 'index'])->name('qr-code');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/loginform',[UserController::class,'loginform'])->name('loginform');
Route::get('/profile',[UserController::class,'profile'])->name('profile');
Route::get('/edit-menu-card',function(){
    return view('menu-card-edit');
})->name('edit-menu-card');
Route::get('/home',function(){
    return view('home');
})->name('home');
Route::get('/add-food',function(){
    return view('add-food');
})->name('add-food');