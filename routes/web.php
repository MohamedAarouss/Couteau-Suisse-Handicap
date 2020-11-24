<?php

use App\Http\Controllers\EntController;
use App\Http\Controllers\NewsController;

use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function() {

    /**
     * Pages du controller Ent
     */

    Route::get('/ent', [EntController::class, 'index'])->name('ent.home');

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

    /**
     * Pages du controller News
     */
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
});
