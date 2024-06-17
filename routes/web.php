<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

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



Route::group(['middleware' => 'cors'], function () {
    Route::controller(ChatController::class)->group(function () {
        // Route::get('/chat', 'index')->name('chat.page');
        Route::get('/chat', 'index')->name('chat.page');
        Route::get('/', 'home')->name('home.page');
        Route::get('/contact', 'contact')->name('contact.page');
    });
});

