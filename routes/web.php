<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValoracionController;



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
    return view('home');
})->name('home');

Route::get('/areas', function () {
    return view('areas');
})->name('areas');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
    // Rutas del perfil
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // Ruta para eliminar la cuenta
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rutas de registro
Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');

// Ruta para la vista del formulario de contacto
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Ruta para manejar el envío del formulario
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

// 🛡️ Rutas legales
Route::view('/aviso-legal', 'legal.legal')->name('legal.notice');
Route::view('/politica-privacidad', 'legal.privacy')->name('legal.privacy');
Route::view('/politica-cookies', 'legal.cookies')->name('legal.cookies');
Route::view('/terminos-condiciones', 'legal.terms')->name('legal.terms');

Route::view('/cafeteria', 'cafeteria')->name('cafeteria');
Route::view('/gaming', 'gaming')->name('gaming');
Route::view('/coworking', 'coworking')->name('coworking');

Route::get('/reservar', [ReservaController::class, 'create'])->name('reservas.create');
Route::post('/reservar', [ReservaController::class, 'store'])->name('reservas.store');

Route::post('/valoraciones', [ValoracionController::class, 'store'])->name('valoraciones.store');

require __DIR__.'/auth.php';
