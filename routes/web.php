<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AllUserController;
use App\Http\Controllers\UrgentUserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HospitalDashboardController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'index']);
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('frontEnd.about');
});
Route::get('/safety-instructions', function () {
    return view('frontEnd.safetyInstructions');
});
Route::get('/emergency-numbers', function () {
    return view('frontEnd.emergencyNumbers');
});
Route::get('/our-team', function () {
    return view('frontEnd.ourTeam');
});
Route::get('/contact-us', function () {
    return view('frontEnd.contactUS');
});
// order
// Route::post('/submit-order', 'OrderController@submitOrder');

Route::post('submit-order', [OrderController::class, 'submitOrder']);
Route::post('add_order_guest', [OrderController::class, 'addOrderGuest']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware('verified')->name('dashboard');
    // Route for hospital 
    Route::resource('hospital', HospitalController::class);
    Route::get('/getCities/{countryId}', [HospitalController::class,'getCities']);
    Route::get('hospital/showLocation/{id}', [HospitalController::class, 'showGPS']);
    // Route for status 
    Route::resource('status', StatusController::class);
    // Route for cars 
    Route::resource('car', CarController::class);
    // Route for users 
    Route::resource('all-users', AllUserController::class);
    Route::put('user-admin/{id}', [AllUserController::class, 'toggleAdminStatus']);
    Route::post('user/{id}/block', [AllUserController::class, 'blockUser']);
    Route::get('blocked-users', [AllUserController::class, 'showBlockedUsers']);
    Route::post('user/{id}/unblock', [AllUserController::class, 'UnblockedUser']);
});

Route::middleware(['auth', 'HospitalAdmin'])->group(function () {
    Route::get('/hospital/{hospital_id}/dashboard', [HospitalDashboardController::class, 'dashboard']);
    Route::get('/getCities/{countryId}', [HospitalDashboardController::class,'getCities']);
    Route::get('/hospital/{hospital_id}/show', [HospitalDashboardController::class, 'show']);
    Route::post('/hospital/{hospital_id}/update', [HospitalDashboardController::class, 'update']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // order
    Route::post('add_order_user', [OrderController::class, 'addOrderUser']);
});

require __DIR__.'/auth.php';