<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('frontview.index');
});

Route::get('index', [HomeController::class, 'showindex']);
Route::get('about', [HomeController::class, 'showabout']);
Route::get('watches', [HomeController::class, 'showwatches']);
Route::get('contact', [HomeController::class, 'showcontact']);
Route::get('login', [HomeController::class, 'showlogin']);

Route::get('supplier', [HomeController::class, 'showsupplier']);
Route::get('colegan', [HomeController::class, 'showcolegan']);
Route::get('dashboard', [HomeController::class, 'showdashboard']);
Route::get('promo', [HomeController::class, 'showpromo']);
Route::get('user', [HomeController::class, 'showuser']);
Route::get('login2', [HomeController::class, 'showlogin2']);


Route::prefix('admin')->middleware('auth')->group(function(){
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('produk',ProdukController::class);
    Route::resource('user',UserController::class);
});


Route::get('produk', [HomeController::class, 'showproduk']); 
Route::get('kategori', [HomeController::class, 'showkategori']);
Route::get('login', [HomeController::class, 'showlogin']);
Route::get('register', [HomeController::class, 'showregister']);
Route::get('login2', [HomeController::class, 'showlogin2']);
Route::get('logout', [HomeController::class, 'logout']);



Route::get('login', [AuthController::class, 'showlogin'])->name('login'); 
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);



Route::get('/template', function () {
    return view('Template.base');
});


