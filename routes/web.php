<?php

//use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FoodItemController;
use App\Http\Controllers\DeliveryController;

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

Route::get('/',[HomeController::class,'home'])->name('home');


Route::get('/customer/list',[CustomerController::class,'list'])->name('Customer_List');
Route::get('/customer/addcustomer',[CustomerController::class,'addcustomer'])->name('add.customer');
Route::post('/customer/store',[CustomerController::class,'customerstore'])->name('customer_store');




Route::get('/shop',[ShopController::class,'list']);
Route::get('/menu',[MenuController::class,'list']);

Route::get('/menu/addmenu',[MenuController::class,'menu'])->name('add.menu');
Route::post('/menu/store',[MenuController::class,'store'])->name('menu.store');


Route::get('/delivery/list',[DeliveryController::class,'list']);
Route::get('/acccount',[AccountController::class,'login']);

Route::get('order/list',[OrderController::class,'orderlist'])->name('orderlist');
Route::get('order/addoder',[OrderController::class,'addorder'])->name('addorder');







Route::get('/customer/store',[AccountController::class,'customerlogin'])->name('custormer.store');
Route::post('/shop/store',[ShopController::class,'list'])->name('shop.store');