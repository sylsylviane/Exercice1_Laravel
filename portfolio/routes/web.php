<?php

use App\Http\Controllers\PortfolioController;
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

Route::get('/', [PortfolioController::class, 'accueil']);
Route::get('/accueil', [PortfolioController::class, 'accueil']);
Route::get('/services', [PortfolioController::class, 'services']);
Route::get('/portfolio', [PortfolioController::class, 'portfolio']);
Route::get('/a-propos', [PortfolioController::class, 'aPropos']);
Route::get('/equipe', [PortfolioController::class, 'equipe']);
Route::get('/contact', [PortfolioController::class, 'contact']);

Route::post('/contact', [PortfolioController::class, 'formulaireContact']);









