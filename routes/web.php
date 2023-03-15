<?php

use App\Http\Controllers\WeatherController;
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

# Ruta para la pagina principal
Route::get('/',[WeatherController::class,'index'])->name('weather.index');

# Ruta para la petición get de consulta a la "api.openweathermap.org"
Route::get('/search',[WeatherController::class,'search'])->name('weather.search');


