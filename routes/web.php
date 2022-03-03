<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TodaySpecialController;
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
//Menu Home
Route::get('/', [IndexController::class, 'index']);
//Menu Today Special
Route::get('/today-special', [TodaySpecialController::class, 'todayspecial']);
//Menu
Route::get('/menu',[MenuController::class, 'menu']);
//Menu Contact
Route::get('/contact',[ContactController::class, 'contact']);