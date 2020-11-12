<?php

use App\Http\Controllers\EntController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('/ent/home');
});
Route::get('/campus', function () {
    return view('/ent/campus');
});
Route::get('/scolarite', function () {
    return view('/ent/scolarite');
});
Route::get('/intranet', function () {
    return view('/ent/intranet');
});
Route::get('/aide', function () {
    return view('/ent/aide');
});
Route::get('/bureau_virtuel', function () {
    return view('/ent/bureau');
});

Route::get('/documentation',function(){
    return view('ent/documentation');
});*/

Route::middleware(['auth:sanctum', 'verified'])->group(function() {

    Route::get('/ent/home', [EntController::class, 'index'])->name('ent.home');

    Route::get('/campus', function () {
        return view('/ent/campus');
    });
    Route::get('/scolarite', function () {
        return view('/ent/scolarite');
    });
    Route::get('/intranet', function () {
        return view('/ent/intranet');
    });
    Route::get('/aide', function () {
        return view('/ent/aide');
    });
    Route::get('/bureau_virtuel', function () {
        return view('/ent/bureau');
    });

    Route::get('/documentation', function () {
        return view('ent/documentation');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
