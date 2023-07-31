<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\CustomizedOrderController;
use App\Http\Controllers\CustomOrderController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CakeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PayAdvanceController;
use App\Http\Controllers\InstallmentController;
use App\Http\Controllers\OrderSummaryController;
use App\Http\Controllers\OnlinePaymentGatewayController;
use App\Http\Controllers\CustomerProfileController;
use App\Http\Controllers\SecondInstallmentController;
use App\Http\Controllers\AdminOrdersController;


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

Route::get('/birthday-cake', function () {
    return view('html.birthday-cakes-page');
})->name('customer.birthday-cakes');

Route::get('/wedding-structures', function () {
    return view('html.wedding-structures');
})->name('customer.wedding-structures');

Route::get('/cup-cakes', function () {
    return view('html.cup-cakes-page');
})->name('customer.cup-cakes');

Route::get('/wedding-cakes', function () {
    return view('html.wedding-cakes');
})->name('customer.wedding-cakes');

Route::get('/celebration-cakes', function () {
    return view('html.celebration-cakes');
})->name('customer.celebration-cakes');

Route::get('/gift-packs', function () {
    return view('html.gift-packs');
})->name('customer.gift-packs');

/*Route::get('/cakes-for-girls', function () {
    return view('html.cakes-for-girls');
})->name('customer.cakes-for-girls');*/

Route::get('/admin-products', function () {
    return view('html.admin-products');
})->name('admin.admin-products');

Route::get('/cake-details', function () {
    return view('html.cake-details');
})->name('customer.cakes-details');

Route::get('/cart', function () {
    return view('html.cart-page');
})->name('cart.page');

Route::view('/thank-you', 'html.thank-you-page')->name('thank-you.page');

Route::post('/register', [RegisterController::class, 'register'])->name('customer.register.submit');

//Route::get('/login', [LoginController::class, 'showLoginForm'])->name('customer.login');
//Route::post('/login', [LoginController::class, 'login'])->name('user.login.submit');

Route::post('/admin/register', [AdminRegisterController::class, 'admin_register'])->name('admin.register.submit');

Route::post('/admin/login', [AdminLoginController::class, 'adminLogin'])->name('admin.login.submit');

Route::get('/customized-orders', function () {
    return view('html.login-customized-order');
})->name('login.customized.orders');

Route::get('/payment', function () {
    return view('html.payment-page');
})->name('payment.page');

Route::match(['get', 'post'], '/pay-advance', function () {
    return view('html.pay-advance-page'); 
})->name('pay-advance.page');

Route::match(['get', 'post'], '/order-summary', function () {
    return view('html.order-summary-page'); 
})->name('order.summary');

Route::match(['get', 'post'], '/online-payment-gateway', function () {
    return view('html.online-payment-gateway');
})->name('online.payment.gateway');

Route::get('/customer-profile', function () {
    return view('html.customer-profile');
})->name('customer.profile');

Route::get('/second-installment-pay', function () {
    return view('html.second-installment-pay');
})->name('second.installment.pay');

/*Route::get('/admin-orders', function () {
    return view('html.admin-orders-page')->with('header', view('html.admin-header')->render());
})->name('admin.orders');*/

Route::get('/admin-orders', function () {
    $header = view('html.admin-header')->render();
    $footer = view('html.admin-footer')->render();
    return view('html.admin-orders-page', compact('header', 'footer'));
})->name('admin.orders');

Route::post('/customized-orders', [CustomizedOrderController::class, 'store'])->name('customized.orders.store');

Route::post('/save-image', [CustomizedOrderController::class, 'saveImage'])->name('save.image')->middleware('auth');

//Route::post('/submit-form', 'CustomOrderController@submitForm')->name('submit-form');
Route::post('/submit-custom-order', [CustomOrderController::class, 'submitForm'])->name('submit.custom.order');

Route::post('/orders', [OrderController::class, 'store'])->name('customer.orders.store');

Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');

//Route::post('/birthday-cake', [ProductController::class, 'store'])->name('customer.store-birthday-cake');
//Route::get('/birthday-cakes', [ProductController::class, 'index'])->name('customer.birthday-cakes-page');

//Route::post('/customer-cake-details', [CakeController::class, 'showCakeDetails'])->name('customer.cake-details.post');
Route::match(['get', 'post'], '/cake-details', [CakeController::class, 'showCakeDetails'])->name('customer.cakes-details');

Route::post('/submit-form', [OrderController::class, 'store'])->middleware('web');

//Route::get('/cart-overview', [CartController::class, 'cart'])->name('customer.cart.overview');

//Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
//Route::get('/cart-overview', [OrderController::class, 'store'])->name('customer.cart.overview');

Route::get('/cart', [CartController::class, 'showCartPage'])->name('cart.page');

Route::delete('/cart/{orderId}', [CartController::class, 'deleteOrder'])->name('cart.delete');
//Route::delete('/cart/delete/{orderId}', 'CartController@deleteOrder')->name('cart.delete');

Route::post('/cart/proceed-to-checkout', [CartController::class, 'proceedToCheckout'])->name('cart.proceedToCheckout');

// Route for handling the form submission when Pay Advance is selected
Route::match(['get', 'post'], '/checkout/pay-advance', [CheckoutController::class, 'payAdvance'])->name('checkout.pay-advance');

// Route for handling the form submission for other cases (Order Summary)
Route::post('/checkout/order-summary', [CheckoutController::class, 'orderSummary'])->name('checkout.order-summary');

Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
//Route::match(['get', 'post'], '/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

//Route::get('/pay-advance', [PayAdvanceController::class, 'showPayAdvanceForm'])->name('pay-advance.page');
//Route::get('/pay-advance', 'PayAdvanceController@index');
Route::get('/pay-advance', [PayAdvanceController::class, 'index']);

Route::post('/store-installment', [InstallmentController::class, 'store'])->name('installment.store');

//Route::get('/get-order-id', [InstallmentController::class, 'getOrderId'])->name('get.order.id');

Route::get('/order-summary', [OrderSummaryController::class, 'showOrderSummary'])->name('order.summary');

//Route::match(['get', 'post'], '/pay-advance', [CheckoutController::class, 'payAdvance'])->name('pay-advance.page');

// Route for processing the order form and generating PDF
Route::post('/process-order', [OrderSummaryController::class, 'processOrder'])->name('process.order');

Route::get('/online-payment-gateway', [OnlinePaymentGatewayController::class, 'showOrderSummary'])->name('online.payment.gateway');

Route::post('/pay-now', [OnlinePaymentGatewayController::class, 'payNow'])->name('pay-now');

Route::post('/submit', [CustomerProfileController::class, 'processCustomerProfile'])->name('customer.profile.submit');

Route::post('/process-second-installment', [SecondInstallmentController::class, 'processSecondInstallment'])->name('process.second.installment');

Route::get('/admin-orders', [AdminOrdersController::class, 'displayOrders'])->name('admin.orders');

Route::patch('/admin-orders/update-payment-status/{order}', [AdminOrdersController::class, 'updatePaymentStatus'])->name('admin.updatePaymentStatus');
