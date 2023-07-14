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
use App\Http\Livewire\Seller\SellerDashboardComponent;
//User
use App\Http\Livewire\User\UserOrderDetailComponent;
use App\Http\Livewire\MenuComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\ThanksComponent;
use App\Http\Livewire\ProductDetailComponent;




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

Route::get('reg', [RegisterController::class, 'index'])->name('view.register');
Route::post('aksireg', [RegisterController::class, 'aksireg'])->name('aksireg');

//Route Seller

//Route All
Route::get('menu', MenuComponent::class)->name('user.menu');
Route::get('home', HomeComponent::class)->name('user.home');
Route::get('cart', CartComponent::class)->name('belanja.cart');
Route::get('checkout', CheckoutComponent::class)->name('belanja.checkout');
Route::get('thanks', ThanksComponent::class)->name('belanja.thanks');
Route::get('/product-detail/{nama_produk}', ProductDetailComponent::class)->name('belanja.detail');


Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['role:seller']], function(){
       //barutest
       Route::get('dashboard-seller', SellerDashboardComponent::class)->name('seller.dashboard');
       Route::get('add-product', SellerAddProductComponent::class)->name('seller.add-product');
       Route::get('all-product', SellerAllProductComponent::class)->name('seller.all-product');
       Route::get('edit-product/{product_id}', SellerEditProductComponent::class)->name('seller.edit-product');
    });
    Route::group(['middleware' => ['role:user']], function(){
        Route::get('home', HomeComponent::class)->name('user.home');
        Route::get('/detaiorder/{order_id}',UserOrderDetailComponent::class)->name('user.DetailOrder');
    });
});