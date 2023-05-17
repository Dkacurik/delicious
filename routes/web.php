<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ServiceController;
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
    return view('welcome');
});


Route::resource('/reservations', ReservationController::class, ['names' =>[
    'index' => 'reservations',
    'store' => 'reservations.store'
]])
    ->middleware(['auth']);

Route::resource('/service', ServiceController::class, ['names' =>[
    'index' => 'service',
    'store' => 'service.store'
]])
    ->middleware(['auth']);

Route::post('/service/{id}', [ServiceController::class, 'update'] )->middleware(['auth']);

Route::get('/dashboard', [ClientController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/{id}', [ClientController::class, 'show'])->middleware(['auth']);

Route::get('/workers', [ProfileController::class, 'showAllUsers'])->name('workers');
Route::get('/services', [ServiceController::class, 'showAll'])->name('all-services');


Route::post('/reservations/{id}', [ReservationController::class, 'update'] )->middleware(['auth']);
Route::post('/reserve/{id}', [ReservationController::class, 'reserve'] )->name('reservation.reserve');
Route::get('/free-dates', [ReservationController::class, 'get_free_dates'])->name('reservation.get_all_free_dates');
//Route::get('/reservations', function () {
//    return view('reservation');
//})->middleware(['auth', 'verified'])->name('reservation');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
