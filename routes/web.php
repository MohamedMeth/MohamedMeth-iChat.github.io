<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\iChatController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

/Home

/dashboard

/profile

/users

/feed

/categories

/
/
*/

Route::get('/',[DashboardController::class , 'index'] )->name('dashboard');

Route::get('/terms',[DashboardController::class , 'terms'] );



Route::post('/ichat',[iChatController::class , 'store'] )->name('ichat.create');
