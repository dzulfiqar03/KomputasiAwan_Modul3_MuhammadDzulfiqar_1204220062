<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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





Route::redirect('/', '/guestPage');

Route::get('/guestPage', function () {
    return view('menu.guest');
})->name('guest');

    Route::get('/adminDashboard', function () {
        return view('Menu.admin');
    })->name('admin');
    Route::get('/loginPage', function () {
    return view('auth.login');
})->name('login');
Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::post('/loginProceed', [App\Http\Controllers\Auth\LoginController::class, 'store'])->name('store');


Route::resource('members', App\Http\Controllers\Auth\RegisterController::class);

Route::get('/registerPage', function () {
    return view('auth.register');
})->name('registerPage');

Auth::routes();

Route::get('/forgotPassword', [ForgotPasswordController::class, 'forgotPassword'])->name('forgot.password');
Route::post('/forgotPassword', [ForgotPasswordController::class, 'forgotPasswordPost'])->name('forgot.password.post');

Route::get('/resetPassword/{token}', [ForgotPasswordController::class, 'resetPassword'])->name('reset.password');

Route::post('/resetPassword', [ForgotPasswordController::class, 'resetPasswordPost'])->name('reset.password.post');

