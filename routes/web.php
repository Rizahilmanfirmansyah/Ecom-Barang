<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Seller\CreateProductController;
use App\Http\Controllers\User\indexController;
//Livewire Package
use App\Http\Livewire\Seller\SellerAddProductComponent;
use App\Http\Livewire\Seller\SellerEditProductComponent;
use App\Http\Livewire\Seller\SellerAllProductComponent;
use App\Http\Livewire\HomeComponent;



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
    return view('welcome');
});

//Route Seller
Route::resource('seller', CreateProductController::class);

//Route User
Route::resource('user', indexController::class);

//Route Login
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('aksilogin', [LoginController::class, 'aksilogin'])->name('aksilogin');

Route::get('dashboard', [DashController::class, 'index'])->name('index');
Route::post('aksilogout', [LoginController::class, 'aksilogout'])->name('aksilogout');

Route::get('reg', [RegisterController::class, 'index'])->name('index');
Route::post('aksireg', [RegisterController::class, 'aksireg'])->name('aksireg');

//Route Seller
Route::get('add-product', SellerAddProductComponent::class)->name('seller.add-product');
Route::get('all-product', SellerAllProductComponent::class)->name('seller.all-product');
Route::get('edit-product/{product_id}', SellerEditProductComponent::class)->name('seller.edit-product');

//Route All
Route::get('home', HomeComponent::class)->name('user.home');

