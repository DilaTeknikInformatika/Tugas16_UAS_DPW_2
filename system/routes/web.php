<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;

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

Route::get('template', function () {
    return view('template');
});

Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);
Route::get('admin/beranda', [HomeController::class, 'showBeranda']);
Route::get('admin/kategori', [HomeController::class, 'showKategori']);

// CRUD produk user
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('produk', ProdukController::class);
    Route::resource('user', UserController::class);; 
});

Route::get('beranda/{status}', [HomeController::class, 'Showberanda']);


// login as Pengguna

Route::get('login', [AuthController::class, 'showlogin']) -> name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register']);
Route::get('forgot', [AuthController::class, 'forgot']);

// Route::get('about',  [IndexController::class, 'showabout']);
// Route::get('watch',  [IndexController::class, 'showwatch']);
// Route::get('contact',  [IndexController::class, 'showcontact']);

// client
Route::get('home', [ClientController::class, 'showhome'] );
Route::get('products', [ClientController::class, 'showproducts'] );
Route::get('about', [ClientController::class, 'showabout'] );
Route::get('client', [ClientController::class, 'showclient'] );
Route::get('contact', [ClientController::class, 'showcontact'] );
Route::get('checkout', [ClientController::class, 'checkout'] );
Route::post('products/filter', [ClientController::class, 'filter']);
Route::post('products/filter2', [ClientController::class, 'filter2']);
Route::get('detail/{produk}', [ClientController::class, 'showdetail']);


//alamat
Route::get('alamat',[HomeController::class, 'showAlamat'] );

// setting control

Route::get('cart', [ClientController::class, 'cart']);