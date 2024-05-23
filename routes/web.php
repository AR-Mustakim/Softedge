<?php

use App\Http\Controllers\LamanUtamaController;
use App\Http\Controllers\TemplateController;
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
*/

Route::get('/', function () {
    return view('front.home');
});

Route::get('/Home', [LamanUtamaController::class, 'lamanUtama']);
// Route::get('/home',[TemplateController::class,'index']);

Route::get('/home', [App\Http\Controllers\ContactController::class, 'showHome'])->name('home');
Route::post('/home', [App\Http\Controllers\ContactController::class, 'sendMail'])->name('send.email');