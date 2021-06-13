<?php

use App\Http\Controllers\EmailController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/services', [PagesController::class, 'services']);
/* Route::get('/contact', [PagesController::class, 'contact']); */




Route::get('/contact', [EmailController::class, 'index']);
Route::get('/test', [EmailController::class, 'test']);
Route::Post('/sendmail/send', [EmailController::class, 'send'])->name('sendmailafro');

