<?php

use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GenerateQRController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RewardController;
use App\Http\Controllers\Admin\VoucherController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\QRController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', [DashboardController::class,'index'])->middleware('auth');

// Route::get('addfiletodatabase',[QRController::class,'addfiletodatabase']);

// Route::post('getQR',[QRController::class,'getQR'])->name('getQR');

Route::get('clear',function(){
    Artisan::call('cache:clear');
    Artisan::call('optimize:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('storage:link');
    Artisan::call('migrate');
    echo "badar";
});
Route::post('/custom-login', [DashboardController::class, 'login'])->name('custom_login');

Route::middleware(["auth"])->group(function(){
    Route::get('admin/dashbaord',[DashboardController::class,'index'])->name('dashbaord');
    Route::get('user/index',[DashboardController::class,'users'])->name('user.index');

    Route::resource('product',ProductController::class);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
