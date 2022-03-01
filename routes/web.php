<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\indexController;
use \App\Http\Controllers\aboutController;
use \App\Http\Controllers\blogController;
use \App\Http\Controllers\blogSingleController;
use \App\Http\Controllers\contactController;
use \App\Http\Controllers\faqController;
use \App\Http\Controllers\featuresController;
use \App\Http\Controllers\featuresSingleController;

use \App\Http\Controllers\dashboard\dashboardController;
use \App\Http\Controllers\dashboard\portfolioController;
use \App\Http\Controllers\dashboard\productController;
use \App\Http\Controllers\dashboard\productDetailController;
use \App\Http\Controllers\dashboard\profileController;
use \App\Http\Controllers\dashboard\chatController;

use \App\Http\Controllers\dashboard\Auth\forgotPasswordController;
use \App\Http\Controllers\dashboard\Auth\lockedController;
use \App\Http\Controllers\dashboard\Auth\loginRegisterController;
use \App\Http\Controllers\dashboard\Auth\singInController;
use \App\Http\Controllers\dashboard\Auth\singUpController;



Route::get('/', [indexController::class ,'index'])->name('index');

Route::get('/blog',[blogController::class ,'index'])->name('blog.index');

Route::get('/about',[aboutController::class ,'index'])->name('about.index');

Route::get('/blog-single',[blogSingleController::class ,'index'])->name('blog-single.index');

Route::get('/contact',[contactController::class ,'index'])->name('contact.index');

Route::get('/faq',[faqController::class ,'index'])->name('faq.index');

Route::get('/features',[featuresController::class ,'index'])->name('features.index');

Route::get('/features-single',[featuresSingleController::class ,'index'])->name('features-single.index');




Route::get('/dashboard/home' ,[dashboardController::class , 'index'])->name('dashboard.index');

Route::get('/dashboard/chat',[chatController::class , 'index'])->name('dashboard.chat.index');

Route::get('/dashboard/portfolio',[portfolioController::class , 'index'])->name('dashboard.portfolio.index');

Route::get('/dashboard/products',[productController::class , 'index'])->name('dashboard.product.index');

Route::get('/dashboard/product-detail',[productDetailController::class , 'index'])->name('dashboard.product-detail.index');

Route::get('/dashboard/profile',[profileController::class , 'index'])->name('dashboard.profile.index');


Route::get('/dashboard/Auth/sign-in',[singInController::class , 'index'])->name('dashboard.auth.sing-in');

Route::get('/dashboard/Auth/sign-up',[singUpController::class , 'index'])->name('dashboard.auth.sing-up');

Route::get('/dashboard/Auth/login-register',[loginRegisterController::class , 'index'])->name('dashboard.auth.login-register');

Route::get('/dashboard/Auth/locked',[lockedController::class , 'index'])->name('dashboard.auth.locked');

Route::get('/dashboard/Auth/forgot-password',[forgotPasswordController::class , 'index'])->name('dashboard.auth.forgot-password');

