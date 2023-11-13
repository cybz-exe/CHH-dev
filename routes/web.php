<?php

use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [MainController::class, 'main']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/register', [RegisterController::class, 'register']);
Route::get('/event', [EventController::class, 'event']);
Route::get('/announcement', [AnnouncementController::class, 'announcement']);
Route::get('/adminevent', [AdminEventController::class, 'adminevent']);
Route::controller(EventController::class)->group(function () {
    Route::get('/event', 'event')->name('event.get');
    Route::post('/event', 'store')->name('event.store');
});

Route::controller(AdminEventController::class)->group(function () {
    Route::get('/adminevent', 'adminevent')->name('adminevent.get');
    Route::post('/adminevent', 'store')->name('adminevent.store');
});
