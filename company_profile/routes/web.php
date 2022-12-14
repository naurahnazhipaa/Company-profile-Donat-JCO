<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\depanController;
use App\Http\Controllers\skillController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\educationController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\pengaturanHalamanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;


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
Route::get('/',[depanController::class, 'index']);

Route::redirect('home', 'dashboard');

//LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [LoginController::class, 'register'])->middleware('guest');
Route::post('/register', [LoginController::class, 'saveRegister'])->middleware('guest');

Route::prefix('dashboard')->middleware('auth')->group(
    function () {
        Route::get('/', function() {
            return view('dashboard.layout');
        });
        
        Route::resource('halaman', halamanController::class);
        Route::resource('experience',experienceController::class);
        Route::resource('education',educationController::class);

        Route::get('skill', [skillController::class, 'index'])->name('skill.index');
        Route::post('skill', [skillController::class, 'update'])->name('skill.update');
        Route::get('profile', [profileController::class, 'index'])->name('profile.index');
        Route::post('profile', [profileController::class, 'update'])->name('profile.update');
        Route::get('pengaturanhalaman', [pengaturanHalamanController::class, 'index'])->name('pengaturanhalaman.index');
        Route::post('pengaturanhalaman', [pengaturanHalamanController::class, 'update'])->name('pengaturanhalaman.update');

        Route::get('product', [ProductController::class, 'index'])->name('product.index');
        Route::get('/create', [ProductController::class,'create'])->name('create');
        Route::post('store/',[ProductController::class, 'store'])->name('store');
        Route::get('show/{product}', [ProductController::class,'show'])->name('show');
        Route::get('edit/{product}', [ProductController::class,'edit'])->name('edit');
        Route::put('edit/{product}',[ProductController::class,'update'])->name('update');
        Route::delete('/{product}', [ProductController::class,'destroy'])->name('destroy');

        Route::resource('contact', ContactController::class);
        
        Route::resource('slider', SliderController::class);
    }
);


//REGISTER
// Route::get('register', [UserController::class,'register'])->name('register');
// Route::get('register', [UserController::class,'register_action'])->name('register.action');
