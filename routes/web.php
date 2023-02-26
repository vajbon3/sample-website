<?php

use App\Models\Service;
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

Route::get('/', static function () {
    return view('home',[
        'services' => Service::all(),
    ]);
})->name('home');

Route::get('/services/{service:slug}', static function(Service $service) {
    return view('service',[
        'service' => $service,
    ]);
})->name('services');
