<?php

use App\Http\Controllers\templateController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\checkLogin;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[templateController::class,'index'])->name('index');
Route::get('/article',[templateController::class,'article'])->name('article');
Route::get('/login',[templateController::class,'login'])->name('login');
Route::get('/privacy',[templateController::class,'privacy'])->name('privacy');
Route::get('/signup',[templateController::class,'signup'])->name('signup');
Route::get('/terms',[templateController::class,'terms'])->name('terms');



Route::get('/admin-create',[templateController::class,'createAdmin'])->name('createAdmin');
Route::get('/admin-register',[templateController::class,'adminRegister'])->name('adminRegister');
Route::get('/admin-login',[templateController::class,'adminLogin'])->name('adminLogin');
Route::get('/admin-logout',[templateController::class,'adminLogout'])->name('adminLogout');
Route::get('/login-verify',[templateController::class,'verifyLogin'])->name('verifyLogin');
Route::get('/admin',[templateController::class,'admin'])->name('admin')->middleware(checkLogin::class);
Route::get('/admin-profile',[templateController::class,'adminProfile'])->name('adminProfile')->middleware(checkLogin::class);
Route::post('/change-admin-password',[templateController::class,'adminChangePwd'])->name('adminChangePwd')->middleware(checkLogin::class);
Route::post('/edit-admin-profile',[templateController::class,'editAdmin'])->name('editAdmin')->middleware(checkLogin::class);
Route::get('/test',[templateController::class,'test'])->name('test');
Route::get('/test2',[templateController::class,'test2'])->name('test2');