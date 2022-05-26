<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\MolController;

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
Route::get('/',[ProjetController::class,'template']);
Route::get('redaction',[ProjetController::class,'template']);
Route::get('/inscription_redacteur',[ProjetController::class,'inscription_redacteur']);
Route::get('/depot_projet',[ProjetController::class,'depot_projet']);
Route::get('/login',[ProjetController::class,'login']);
//showw
route::get('projets',[ProjetController::class,'show']);
use App\Http\Controllers\AddController;
//pour affichage les projets depose par user
route::get('show_projets',[AddController::class,'create']);
route::post('show_projets',[AddController::class,'store']);

