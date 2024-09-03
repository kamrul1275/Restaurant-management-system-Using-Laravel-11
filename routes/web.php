<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('frontend.dashboard.user_dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';






// Frontend

// Route::get('/login',[UserController::class,'login']);

// Route::get('/register',[UserController::class,'register']);  ->name('user.index')



Route::get('/',[UserController::class,'Index']);

// Route::get('/dashboard', function () {
//     
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');


Route::get('/user/logout',[UserController::class,'userLogout'])->name("user.logout");







// Backen Part


Route::get('/admin/login',[AdminController::class,'adminLoginForm'])->name('admin.login.form');
Route::post('/admin/login',[AdminController::class,'adminLogin'])->name('admin.login');


Route::middleware('admin')->group(function(){

    Route::get('/admin/dashboard',[AdminController::class,'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class,'adminLogout'])->name('admin.logout');

    Route::get('/admin/profile',[AdminController::class,'adminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store',[AdminController::class,'adminProfileUpdate'])->name('admin.profile.store');



Route::controller(CategoryController::class)->group(function(){
     
    Route::get('/all/category', 'allCategory')->name('all.category');
    Route::get('/add/category', 'addCategory')->name('add.category');
    Route::post('/store/category', 'storeCategory')->name('store.category');

});


});//end admin maddleware


