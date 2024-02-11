<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductgelleryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserprofileController;
use App\Http\Controllers\CoupanController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\FrontedController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// login rejister web 
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('register', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

// forget password 
Route::get('email', [CustomAuthController::class,'email']);
Route::post('email', [CustomAuthController::class,'send_otp']);

Route::get('verify_otp/{id}', [CustomAuthController::class,'otp']);
Route::post('verify_otp/{id}', [CustomAuthController::class,'verify_otp']);

Route::get('change_password/{id}', [CustomAuthController::class,'password']);
Route::post('change_password/{id}', [CustomAuthController::class,'change_password']);







Route::group(['middleware'=>'auth'],function(){

    Route::get('/',[BannerController::class,'index']);


    // banner web 
    Route::get('form_banner',[BannerController::class,'form_banner']);
    Route::post('form_banner',[BannerController::class,'save_banner']);
    
    Route::get('table_banner',[BannerController::class,'table_banner']);
    
    Route::get('status_banner/{id}',[BannerController::class,'status_banner']);
    
    Route::get('edit_banner/{id}',[BannerController::class,'edit_banner']);
    Route::post('edit_banner/{id}',[BannerController::class,'update_banner']);
    
    Route::get('delete_banner/{id}',[BannerController::class,'delete_banner']);
    
    
    // category web 
    Route::get('form_category',[CategoryController::class,'form_category']);
    Route::post('form_category',[CategoryController::class,'save_category']);
    
    Route::get('table_category',[CategoryController::class,'table_category']);
    
    Route::get('status_category/{id}',[CategoryController::class,'status_category']);
    
    Route::get('edit_category/{id}',[CategoryController::class,'edit_category']);
    Route::post('edit_category/{id}',[CategoryController::class,'update_category']);
    
    Route::get('delete_category/{id}',[CategoryController::class,'delete_category']);
    
    
    // product web
    Route::get('form_product',[ProductController::class,'form_product']);
    Route::post('form_product',[ProductController::class,'save_product']);
    
    Route::get('card_product',[ProductController::class,'card_product']);
    
    Route::get('status_product/{id}',[ProductController::class,'status_product']);
    
    Route::get('delete_product/{id}',[ProductController::class,'delete_product']);
    
    Route::get('edit_product/{id}',[ProductController::class,'edit_product']);
    Route::post('edit_product/{id}',[ProductController::class,'update_product']);
    
    
    // productgellery web
    Route::get('form_productgellery',[ProductgelleryController::class,'form_productgellery']);
    Route::post('form_productgellery',[ProductgelleryController::class,'save_productgellery']);
    
    
    Route::get('table_productgellery',[ProductgelleryController::class,'table_productgellery']);
    
    Route::get('status_productgellery/{id}',[ProductgelleryController::class,'status_productgellery']);
    
    
    Route::get('delete_productgellery/{id}',[ProductgelleryController::class,'delete_productgellery']);
    
    Route::get('edit_productgellery/{id}',[ProductgelleryController::class,'edit_productgellery']);
    Route::post('edit_productgellery/{id}',[ProductgelleryController::class,'update_productgellery']);
    
    
    
    // order web
    
    Route::get('form_order',[OrderController::class,'form_order']);
    Route::post('form_order',[OrderController::class,'save_order']);
    
    Route::get('table_order',[OrderController::class,'table_order']);
    
    Route::get('status_order/{id}',[OrderController::class,'status_order']);
    
    Route::get('delete_order/{id}',[OrderController::class,'delete_order']);
    
    Route::get('edit_order/{id}',[OrderController::class,'edit_order']);
    Route::post('edit_order/{id}',[OrderController::class,'update_order']);
    
    
    // user_profile 
    Route::get('form_user',[UserprofileController::class,'form_user']);
    Route::post('form_user',[UserprofileController::class,'save_user']);
    
    Route::get('table_user',[UserprofileController::class,'table_user']);
    
    Route::get('delete_user/{id}',[UserprofileController::class,'delete_user']);
    
    Route::get('edit_user/{id}',[UserprofileController::class,'edit_user']);
    Route::post('edit_user/{id}',[UserprofileController::class,'update_user']);
    
    // coupan web
    
    Route::get('form_coupan',[CoupanController::class,'form_coupan']);
    Route::post('form_coupan',[CoupanController::class,'save_coupan']);
    
    
    Route::get('table_coupan',[CoupanController::class,'table_coupan']);
    
    Route::get('status_coupan/{id}',[CoupanController::class,'status_coupan']);
    
    
    Route::get('delete_coupan/{id}',[CoupanController::class,'delete_coupan']);
    
    Route::get('edit_coupan/{id}',[CoupanController::class,'edit_coupan']);
    Route::post('edit_coupan/{id}',[CoupanController::class,'update_coupan']);
    
    
    // testimonial web
    Route::get('form_test',[TestimonialController::class,'form_test']);
    Route::post('form_test',[TestimonialController::class,'save_test']);
    
    
    Route::get('table_test',[TestimonialController::class,'table_test']);
    
    Route::get('status_test/{id}',[TestimonialController::class,'status_test']);
    
    
    Route::get('delete_test/{id}',[TestimonialController::class,'delete_test']);
    
    Route::get('edit_test/{id}',[TestimonialController::class,'edit_test']);
    Route::post('edit_test/{id}',[TestimonialController::class,'update_test']);
    
    
    // setting web 
    // Route::get('form_setting',[SettingController::class,'form_setting']);
    // Route::post('form_setting',[SettingController::class,'save_setting']);
    
    Route::get('edit_setting',[SettingController::class,'edit_setting']);
    Route::post('edit_setting',[SettingController::class,'update_setting']);

});

// fronted web 

Route::get('home',[FrontedController::class,'home']);
Route::get('cart',[FrontedController::class,'cart']);
Route::get('login-fronted',[FrontedController::class,'login']);
Route::get('pro-details/{slug}',[FrontedController::class,'pro']);
Route::get('checkout',[FrontedController::class,'checkout']);
Route::get('blog',[FrontedController::class,'blog']);
Route::get('elements',[FrontedController::class,'elements']);
Route::get('blog-details',[FrontedController::class,'details']);
Route::get('contact',[FrontedController::class,'contact']);
Route::get('category/{slug}',[FrontedController::class,'category']);






