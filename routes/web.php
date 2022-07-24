<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Livewire\Admin\Allbanner;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

// Admin route
Route::get('/banner',Allbanner::class)->name('admin.banner');
// Route::get('banner/',[BannerController::class,'banner'])->name('admin.banner');
Route::post('banner/add/',[BannerController::class,'AddBanner'])->name('admin.addBanner');
Route::get('/banner-edit/{id}',[BannerController::class,'EditBanner']);

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
