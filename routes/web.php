<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CustomizedOrderController;
use App\Http\Controllers\CustomOrderController;

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
    return view('welcome');
});

Route::get('/html-file', function () {
    return view('html.file');
});

Route::get('/cake-shop', function () {
    return view('html.cake-shop');
})->name('cake-shop');

Route::get('/login', function () {
    return view('html.login');
})->name('customer.login');

Route::get('/register', function () {
    return view('html.register');
})->name('customer.register');


Route::get('/admin-login', function () {
    return view('html.admin-login');
})->name('admin.login');

Route::get('/admin-home', function () {
    return view('html.admin-home');
})->name('admin.home');

Route::get('/admin-register', function () {
    return view('html.admin-register');
})->name('admin.register');

Route::get('/customized_orders', function () {
    return view('html.customized_orders');
})->name('customer.customized_orders');

Route::get('/choose-cakeoptions', function () {
    return view('html.choose-cakeoptions');
})->name('customer.choose-cakeoptions');

Route::get('/cart-overview', function () {
    return view('html.cart-overview');
})->name('customer.cart.overview');

Route::get('/birthday-cake', function () {
    return view('html.birthday-cakes-page');
})->name('customer.birthday-cakes');


Route::post('/register', [RegisterController::class, 'register'])->name('customer.register.submit');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('customer.login');
Route::post('/login', [LoginController::class, 'login'])->name('user.login.submit');

Route::post('/admin/register', [AdminRegisterController::class, 'admin_register'])->name('admin.register.submit');

Route::post('/admin/login', [AdminLoginController::class, 'adminLogin'])->name('admin.login.submit');

Route::get('/customized-orders', function () {
    return view('html.login-customized-order');
})->name('login.customized.orders');

Route::post('/customized-orders', [CustomizedOrderController::class, 'store'])->name('customized.orders.store');

Route::post('/save-image', [CustomizedOrderController::class, 'saveImage'])->name('save.image')->middleware('auth');

//Route::post('/submit-form', 'CustomOrderController@submitForm')->name('submit-form');
Route::post('/submit-custom-order', [CustomOrderController::class, 'submitForm'])->name('submit.custom.order');




