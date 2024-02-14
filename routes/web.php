<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GeolocationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\localizationController;
use App\Http\Controllers\StepTwoController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\ProductImagesDuringRentalController;
use App\Http\Controllers\VendorController;
use App\Http\Livewire\Dashboard;
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

Route::get('/', [Dashboard::class,'render']);
Route::get('/Home',[HomeController::class,'Home'])->name('Home');
Route::get('/About', function () {
    return view('frontEnd.About');
})->name('About');
Route::get('/Contact', function () {
    return view('frontEnd.Contact');
})->name('Contact');
Route::get('/HowItWorks', function () {
    return view('frontEnd.Hiw');
})->name('HowItWorks');
Route::get('/PrivacyPolicy', function () {
    return view('frontEnd.PrivacyPolicy');
})->name('PrivacyPolicy');
Route::get('/check', function () {
    return view('frontEnd.checkout')->with('cat','     ');
})->name('check');
Route::get('/popup', function () {
    return view('frontEnd.popup');})->name('popup');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','role:Admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/steptwo',function(){return view('frontEnd.steptwo');})->name('steptwo');
    route::post('/updateprofile',[StepTwoController::class,'saveData'])->name('updateprofile');
    Route::get('/EditProfile', [ProfileController::class, 'editProfile'])->name('EditProfile');
    Route::get('/verificat',[ProfileController::class, 'verification'])->name('verifications');
    Route::get('/settings',function(){return view('frontEnd.Setting');})->name('setting');
    Route::get('/cards',function(){return view('frontEnd.popup');})->name('cards');
    route::post('/saveprofile',[ProfileController::class,'saveEditProfile'])->name('saveprofile');
    Route::get('/Uploadproduct',[ProductController::class,'CreateProduct'])->name('Uploadproduct');

});



Route::get('/Users' , [ProfileController::class,'Users'])->name('Users');
Route::get('/Users', [ProfileController::class, 'Users'])->name('Users');
Route::get('/EditUser/{id}', [ProfileController::class, 'EditUser'])->name('EditUser');
Route::post('/SaveUser', [ProfileController::class, 'SaveUser'])->name('SaveUser');
Route::get('/DeleteUser/{id}',[ProfileController::class,'DeleteUser'])->name('DeleteUser');

Route::get('/AllProduct',[ProductController::class,'Index'])->name('AllProduct');

Route::post('/SaveProduct',[ProductController::class,'SaveProduct'])->name('SaveProduct');
Route::any('/EditProduct/{id}',[ProductController::class,'EditProduct'])->name('EditProduct');
Route::post('/UpdateProduct/{id}',[ProductController::class,'UpdateProduct'])->name('UpdateProduct');
Route::get('/DeleteProduct/{id}',[ProductController::class,'DeleteProduct'])->name('DeleteProduct');
Route::get('/RemovePicture/{id}',[ProductController::class,'RemovePicture'])->name('RemovePicture');

Route::middleware('auth','verified','role:Admin')->group(function () {
Route::get('AddCategory',[CategoryController::class,'AddCategory'])->name('AddCategory');
Route::post('SaveCategory',[CategoryController::class,'SaveCategory'])->name('SaveCategory');
Route::get('AllCategory',[CategoryController::class,'AllCategory'])->name('AllCategory');
Route::get('DeleteCategory/{id}',[CategoryController::class,'DeleteCategory'])->name('DeleteCategory');
Route::get('Orders',[OrdersController::class,'Orders'])->name('Orders');
});

Route::post('/Products',[HomeController::class,'getProducts'])->name('Products');
Route::any('/ProductDeatils/{id}',[HomeController::class,'getDetails'])->name('ProductDeatils');
Route::post('/add_cart/{id}',[HomeController::class,'add_cart'])->name('add_cart');

Route::any('/ratings', [RatingController::class, 'store'])->name('ratings.store');


Route::any('Create_order/{id}',[OrdersController::class,'Create_order'])->name('Create_order');

Route::get('/myRentals',[RentalController::class,'rental'])->name('myrentals');
Route::get('/booking_approve/{id}',[RentalController::class,'approved'])->name('approved');
Route::get('/confirmed/{id}',[RentalController::class,'checkout'])->name('confirmed');
Route::get('/cancelledBooking',[RentalController::class,'cancelledBookings'])->name('cancelledBooking');
Route::get('/completed',[RentalController::class,'completedBookings'])->name('completedBooking');
Route::get('/declined/{id}',[RentalController::class,'bookingDelined'])->name('declined');
Route::get('/markasread/{id}',[RentalController::class,'asRead'])->name('markasread');
Route::get('/imagesbefore',[ProductImagesDuringRentalController::class,'getForm'])->name('imagesbefore');
Route::post('/savebefore',[ProductImagesDuringRentalController::class,'beforerent'])->name('savebefore');






Route::get('/stripe/{total_price}',[HomeController::class,'stripe'])->name('stripe');
Route::post('/stripe/{total_price}',[HomeController::class,'stripePost'])->name('stripe.post');
Route::get('/getsearch',[HomeController::class,'getsearch'])->name('getsearch');


Route::get('/vendor',[VendorController::class,'GetAcc'])->name('vendor');
Route::post('/vendorsave',[VendorController::class,'saveAcc'])->name('vendorsave');


Route::get('/VendorPayment',[VendorController::class,'VendorPayment'])->name('VendorPayment');
Route::get('/Vendorshow',[VendorController::class,'VendorShow'])->name('Vendorshow');
Route::get('/Vendorreport/{id}',[VendorController::class,'vendorReport'])->name('vendorReport');
Route::get('/vendor/{id}',[VendorController::class,'payVendor'])->name('paied');


Route::get("locale/{lange}",[localizationController::class,'setlang']);
require __DIR__.'/auth.php';
