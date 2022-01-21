<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicantController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('/technology', function () {
    return view('Technology');
})->name('technology');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Account Management
    Route::resource('/user', AccountController::class);
    Route::post('/password/{user}', [AccountController::class, 'updatePassword'])->name('password');
    Route::get('/account-verify/{user}', [AccountController::class, 'approveOrDecline'])->name('account.verify');

    // Form
    Route::get('/forms', [FormController::class, 'index'])->name('form.lto');
    Route::post('/forms', [FormController::class, 'store'])->name('form.submit');
    Route::get('/form/{form}', [FormController::class, 'show'])->name('form.show');
    Route::get('/form-approved/{form}', [FormController::class, 'approved'])->name('form.approved');
    Route::get('/form-declined/{form}', [FormController::class, 'decline'])->name('form.decline');

    // Applicants
    Route::get('/applicants', [ApplicantController::class, 'index'])->name('applicants');
    Route::get('/applicants-search', [ApplicantController::class, 'search'])->name('search');
    Route::post('/applicants-search', [ApplicantController::class, 'show'])->name('applicants-show');

});

require __DIR__.'/auth.php';
