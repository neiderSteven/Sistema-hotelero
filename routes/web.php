<?php

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\BedroomsController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'Welcome']);

Route::get('/bedrooms', [BedroomsController::class, 'getAll']);
Route::post('/bedrooms/create', [BedroomsController::class, 'create'])->name('bedroom.create');
Route::delete('/bedrooms/delete/{id}', [BedroomsController::class, 'delete'])->name('bedroom.delete');

Route::get('/reservations', [ReservationController::class, 'getAll']);
Route::post('/reservations/create', [ReservationController::class, 'create'])->name('reservation.create');
Route::delete('/reservations/delete/{id}', [ReservationController::class, 'delete'])->name('reservation.delete');

Route::get('/inventorys', [InventoryController::class, 'getAll']);
Route::get('/reports', [ReportController::class, 'getAll']);
