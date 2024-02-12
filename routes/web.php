<?php

use App\Http\Controllers\BeadController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\LatestController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


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
    return view('landing');
});
Route::get('/',[CarouselController::class,'index'])->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
    
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('dashboard',[CarouselController::class,'index'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profiles', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profiles', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profiles', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(AdminController::class)->group(function(){
    Route::get('adminregister','register')->name('backend.register');
    Route::post('adminregister','registerSave')->name('backend.register.save');
});

Route::get('/test', [ProductController::class, 'categorys'])->name('product');




require __DIR__.'/auth.php';
Route::get('/customize',function(){
    return view('customize');
});
Route::get('log',function(){
    return view('logged');
});
Route::get('cart',function(){
    return view('cart');
});

Route::get('shop', [ProductController::class, 'categorys'])->name('product');
Route::get('shop/{id}', [ProductController::class, 'detail'])->name('detail');
Route::get('carousel',[CarouselController::class,'index'])->name('carousel');

Route::get('customize',[BeadController::class,'index'])->name('customize');
Route::get('latest',[LatestController::class,'index'])->name('latest');
Route::get('home',[MainController::class,'index'])->name('main');
Route::post('add_to_cart',[ProductController::class,'addToCart'])->name('addtocart');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
});

Route::get('Admin',[UserController::class,'userData'])->name('backend.index');
Route::get('adminproduct',[ProductController::class,'index'])->name('backend.product.index');