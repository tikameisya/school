<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdukController; 

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

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/proseslogin',[LoginController::class,'proseslogin'])->name('proseslogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[LoginController::class,'register'])->name('register');
Route::post('/registeruser',[LoginController::class,'registeruser'])->name('registeruser');
Route::get('/home',[LoginController::class,'home'])->name('home');
Route::get('/produk',[ProdukController::class,'produk'])->name('produk');
Route::get('/create',[ProdukController::class,'create'])->name('create');
Route::POST('/creating',[ProdukController::class,'creating'])->name('creating');
Route::get('/{id}/edit',[ProdukController::class,'edit'])->name('edit');
Route::put('/editing/{id}',[ProdukController::class,'editing'])->name('editing');
Route::delete('/produk/{id}',[ProdukController::class,'delete'])->name('delete');
