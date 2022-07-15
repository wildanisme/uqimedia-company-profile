<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\front\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/blog/{slug}', [HomeController::class, 'showPost'])->name('blogPost.show');
Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard.index');

