<?php

use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\AirlineController;
use App\Http\Controllers\Backend\AirportController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FlightController;
use App\Http\Controllers\Backend\FlightTypeController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\MyBookingController;
use App\Http\Controllers\Frontend\ProfileController;
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

// frontend routes
// * home routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/get-location', [HomeController::class, 'getLocation']);
Route::get('/get-location-by/{id}', [HomeController::class, 'getLocationById']);

// * flight routes
Route::get('/flight', [App\Http\Controllers\Frontend\FlightController::class, 'index'])->name('flight');

Route::middleware('auth')->group(function(){
    // * profile routes
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/my-booking', [MyBookingController::class, 'myBooking'])->name('my.booking');
    Route::get('/change-password', [ChangePasswordController::class, 'changePassword'])->name('change.password');
});

// auth routes
Route::get('/login', [LoginController::class, 'loginPage'])->name('login');
Route::post('/login-request', [LoginController::class, 'loginRequest'])->name('login.request');
Route::get('/register', [RegisterController::class, 'registerPage'])->name('register');
Route::post('/register-request', [RegisterController::class, 'registerRequest'])->name('register.request');

Route::prefix('/admin')->middleware(['auth', 'user_type'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

     // airline routes
     Route::get('/airline', [AirlineController::class, 'index'])->name('admin.airline');
     Route::post('/airline-create', [AirlineController::class, 'create'])->name('admin.airline.create');
     Route::get('/airline-edit/{id}', [AirlineController::class, 'edit'])->name('admin.airline.edit');
     Route::put('/airline-update/{id}', [AirlineController::class, 'update'])->name('admin.airline.update');
     Route::get('/airline-destroy/{id}', [AirlineController::class, 'destroy'])->name('admin.airline.destroy');
    // airport routes
    Route::get('/airport', [AirportController::class, 'index'])->name('admin.airport');
    Route::post('/airport-create', [AirportController::class, 'create'])->name('admin.airport.create');
    Route::get('/airport-edit/{id}', [AirportController::class, 'edit'])->name('admin.airport.edit');
    Route::put('/airport-update/{id}', [AirportController::class, 'update'])->name('admin.airport.update');
    Route::get('/airport-destroy/{id}', [AirportController::class, 'destroy'])->name('admin.airport.destroy');
    // flight type routes
    Route::get('/flight-type', [FlightTypeController::class, 'index'])->name('admin.flight.type');
    Route::post('/flight-type-create', [FlightTypeController::class, 'create'])->name('admin.flight.type.create');
    Route::get('/flight-type-edit/{id}', [FlightTypeController::class, 'edit'])->name('admin.flight.type.edit');
    Route::put('/flight-type-update/{id}', [FlightTypeController::class, 'update'])->name('admin.flight.type.update');
    Route::get('/flight-type-destroy/{id}', [FlightTypeController::class, 'destroy'])->name('admin.flight.type.destroy');
    // flight routes
    Route::get('/flight', [FlightController::class, 'index'])->name('admin.flight');
    Route::get('/flight-create', [FlightController::class, 'create'])->name('admin.flight.create');
    Route::post('/flight-store', [FlightController::class, 'store'])->name('admin.flight.store');
    Route::get('/flight-edit/{id}', [FlightController::class, 'edit'])->name('admin.flight.edit');
    Route::put('/flight-update/{id}', [FlightController::class, 'update'])->name('admin.flight.update');
    Route::get('/flight-destroy/{id}', [FlightController::class, 'destroy'])->name('admin.flight.destroy');

    // logouts
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

