<?php

//use App\Http\Controllers\AdminController;
use App\Models\registration;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\FrontendHomeController;
use App\Http\Controllers\FrontendOrderController;
use App\Http\Controllers\FrontendCategoryController;
use App\Http\Controllers\Frontend\CustomerController as FrontendCustomerController;

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


//Admin pannel routes


Route::get('/user/login',[Usercontroller::class,'login'])->name('adminlogin');
Route::post('/user/login/post',[Usercontroller::class,'loginPost'])->name('login.post');

Route::group(['middleware'=> 'auth'], function (){

Route::get('/user/logout',[Usercontroller::class,'logout'])->name('admin.logout');

Route::get('/',[HomeController::class,'home'])->name('home');


Route::get('/customer/list',[CustomerController::class,'list'])->name('Customer_List');
Route::get('/customer/addcustomer',[CustomerController::class,'addcustomer'])->name('add.customer');
Route::post('/customer/store',[CustomerController::class,'customerstore'])->name('customer_store');

Route::get('/shop',[ShopController::class,'list']);



// Route::get('/menu/addmenu',[MenuController::class,'menu'])->name('addmenu');
// Route::get('/menu/list',[MenuController::class,'store'])->name('menu.list');
// Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store');

Route::get('/menu',[MenuController::class,'list']);
Route::get('/menu/addmenu', [MenuController::class, 'menu'])->name('addmenu');
Route::post('/menu/store', [MenuController::class, 'storeMenu'])->name('store.menu');


Route::match(['get', 'post'], '/menu/list', [MenuController::class, 'list'])->name('menu.list');



Route::get('/delivery/list',[DeliveryController::class,'list']);
Route::get('+',[AccountController::class,'login']);

Route::get('/customer/store',[AccountController::class,'customerlogin'])->name('custormer.store');
Route::post('/shop/store',[ShopController::class,'list'])->name('shop.store');

});


//Front_End Routes


Route::get('/home',[FrontendHomeController::class,'home'])->name('front.home');
Route::get('/search',[FrontendHomeController::class,'search'])->name('home.search');

Route::get('/registration',[frontendCustomerController::class,'registration'])->name('customer.registration');
Route::post('/registration',[frontendCustomerController::class, 'registration_store'])->name('customer.store');

Route::group(['middleware'=> 'auth'], function () 
{
Route::get('/customer/login',[frontendCustomerController::class,'login'])->name('customer.login');

Route::get('/category',[FrontendCategoryController::class,'explorefood'])->name('explore.food');
Route::get('/foods/foodmenu',[FrontendCategoryController::class,'foodmenu'])->name('food.menu');


Route::get('/foods/foodmenu/foodorder',[FrontendOrderController::class,'foodorder'])->name('order.food');
Route::post('/foods/foodmenu/foodorder',[FrontendOrderController::class,'food_store'])->name('order.store');   

Route::post('/customer/login',[FrontendCustomerController::class, 'login_store'])->name('login.store');

Route::get('/foodorder',[FrontendOrderController::class,'foodorder_page'])->name('Foodorder');
});

