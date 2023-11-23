<?php

use App\Http\Controllers\AutosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfraccionesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TitularesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


// Route::get("/", function () {
//     return view ('Home.index');
// });


// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    // Route::get('Home.index');
});

// Route::controller(AutosController::class)->group(function(){
//     Route::get('/automotores', 'index')->name('index');
//     Route::get('Auto.index');
// });

Route::resource('automotores', AutosController::class);

// Route::controller(TitularesController::class)->group(function(){
//     Route::get('/titulares', 'index')->name('index');
//     Route::get('Titular.index');
// });

Route::resource('titulares', TitularesController::class);
// Route::post('/titulares', [TitularesController::class, 'store'])->name('titulares.store');
Route::get('/titulares/{titular}/edit', [TitularesController::class, 'edit'])->name('titulares.edit');
Route::get('/titulares/{titular}/detail', [TitularesController::class, 'show'])->name('titulares.detail');
Route::delete('/titulares/{titular}', [TitularesController::class, 'destroy'])->name('titulares.destroy');

// Route::controller(InfraccionesController::class)->group(function(){
//     Route::get('/infracciones', 'index')->name('index');
//     Route::get('Infraccion.index');
// });

Route::resource('infracciones', InfraccionesController::class);











// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
