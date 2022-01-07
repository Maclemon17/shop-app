<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\user\UserDashboardController;


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

// Route::get('/', function () {
//     return view('index');
// })->name('home');


Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('about-us', [PagesController::class, 'aboutUs'])->name('about');
Route::get('shop', [PagesController::class, 'shop'])->name('shop');
Route::get('cart', [PagesController::class, 'cart'])->name('cart');
Route::get('contact-us', [PagesController::class, 'contactUs'])->name('contact');
Route::get('checkout', [PagesController::class, 'checkOut'])->name('checkout');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('userdashboard', [UserDashboardController::class, 'dashboard'])->name('UserDashboard');
});

// Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('admindashboard', [AdminDashboardController::class, 'dashboard'])->name('AdminDashboard');
});
