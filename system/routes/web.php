<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;


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

Route::get('/', [HomeController::class, 'showindex']);

Route::get('/index', [HomeController::class, 'showindex']);
Route::get('/produk', [HomeController::class, 'showproduk']);
Route::get('/detail', [HomeController::class, 'showdetail']);
Route::get('/checkout', [HomeController::class, 'showcheckout']);
Route::get('/cart', [HomeController::class, 'showcart']);
Route::get('/shop', [HomeController::class, 'showshop']);
Route::get('/contact', [HomeController::class, 'showcontact']);


Route::get('/supplier', [HomeController::class, 'showsupplier']);
Route::get('/colegan', [HomeController::class, 'showcolegan']);
Route::get('/dashboard', [HomeController::class, 'showdashboard']);
Route::get('/dashboard{status}', [HomeController::class, 'showdashboard']);
Route::get('/promo', [HomeController::class, 'showpromo']);
Route::get('/user', [HomeController::class, 'showuser']);
Route::get('/login2', [AuthController::class, 'showlogin2']);

Route::get('/produk', [HomeController::class, 'showproduk']);
Route::get('/kategori', [HomeController::class, 'showkategori']);

Route::get('setting', [SettingController::class, 'index']);
Route::post('setting', [SettingController::class, 'store']);

Route::get('/login', [AuthController::class, 'showlogin']);
Route::get('/register', [AuthController::class, 'showregister']);
Route::get('/login2', [AuthController::class, 'showlogin2']);
Route::get('/logout', [AuthController::class, 'logout']);


    Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('produk/filter', [ProdukController::class, 'filter']);    
    Route::resource('/produk', ProdukController::class);
    Route::resource('/user', UserController::class);
    Route::post('kategori/filter', [KategoriController::class, 'filter']);    
    Route::resource('/kategori', KategoriController::class);

});

Route::get('login', [AuthController::class, 'showlogin']);
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('clientlogin', [AuthController::class, 'showClientLogin']);
Route::post('clientlogin', [AuthController::class, 'ClientLoginprocess']);
Route::get('clientlogout', [AuthController::class, 'Clientlogout']);

Route::get('register', [AuthController::class, 'showRegister']);
Route::post('register', [AuthController::class, 'registration']);

Route::get('test-collection', [HomeController::class, 'testCollection']);
Route::get('test-ajax', [HomeController::class, 'testAjax']);

