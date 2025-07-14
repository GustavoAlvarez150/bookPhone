<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\bookPhoneC;
use App\Http\Controllers\LoginController;



Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/bookPhone',[bookPhoneC::class,'showBookPhoneV']);
Route::get('/Login',[LoginController::class,'ShowLogin']);

Route::get('/test',[bookPhoneC::class,'getBookPhone']);
Route::post('/bookPhone',[bookPhoneC::class,'savePhone']);
Route::post('/SetUser',[LoginController::class,'SetUser']);//Aun no esta disponible, debido que faltan migraciones y logica para inserción a BD


require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
