<?php

use App\Http\Controllers\AutosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfraccionesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TitularesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
// use App\Http\Controllers\SearchController;

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


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    // Route::get('Home.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('automotores', AutosController::class);
    Route::resource('titulares', TitularesController::class);
    Route::resource('infracciones', InfraccionesController::class);
});

require __DIR__ . '/auth.php';




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


// Route::controller(AutosController::class)->group(function(){
//     Route::get('/automotores', 'index')->name('index');
//     Route::get('Auto.index');
// });

// AUTOMOTORES
// Route::resource('automotores', AutosController::class);

// Route::get('/automotores/{automotor}/edit', [AutosController::class, 'edit'])->name('automotores.edit');
// Route::get('/automotores/{automotor}/detail', [AutosController::class, 'show'])->name('automotores.detail');
// Route::delete('/automotores/{automotor}', [AutosController::class, 'destroy'])->name('automotores.destroy');



// TITULARES
// Route::resource('titulares', TitularesController::class);

// Route::controller(TitularesController::class)->group(function(){
//     Route::get('/titulares', 'index')->name('index');
//     Route::get('Titular.index');
// });
// Route::post('/titulares', [TitularesController::class, 'store'])->name('titulares.store');
// Route::get('/titulares/{titular}/edit', [TitularesController::class, 'edit'])->name('titulares.edit');
// Route::get('/titulares/{titular}/detail', [TitularesController::class, 'show'])->name('titulares.detail');
// Route::delete('/titulares/{titular}', [TitularesController::class, 'destroy'])->name('titulares.destroy');



// INFRACCIONES
// Route::resource('infracciones', InfraccionesController::class);
// Route::controller(InfraccionesController::class)->group(function(){
//     Route::get('/infracciones', 'index')->name('index');
//     Route::get('Infraccion.index');
// });
// Route::get('/infracciones/{infraccion}/edit', [InfraccionesController::class, 'edit'])->name('infracciones.edit');
// Route::get('/infracciones/{infraccion}/detail', [InfraccionesController::class, 'show'])->name('infracciones.detail');
// Route::delete('/infracciones/{infraccion}', [InfraccionesController::class, 'destroy'])->name('infracciones.destroy');



// <-- PARA EL BUSCADOR -->
// Route::get('/search', [SearchController::class, 'index'])->name('search');
// Rutas para el buscador
// Route::get('/search', [SearchController::class, 'index'])->name('search');
// Route::get('/search/results/{query}', [SearchController::class, 'results'])->name('search.results');
// Route::get('/search', [SearchController::class, 'index'])->name('search');
// Route::get('/search/{query}', [SearchController::class, 'search'])->name('search.results');
// Route::get('/search', [SearchController::class, 'index'])->name('search.index');
// Route::get('/search/results/{query}', [SearchController::class, 'search'])->name('search.results');
// Route::resource('search', SearchController::class);
