<?php

use App\Http\Controllers\EntController;
use App\Http\Controllers\FullCalendarEventMasterController;
use App\Http\Controllers\FullCalendarEventAppointmentMasterController;
use App\Http\Controllers\NewsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    Route::get('/new/{id}', [NewsController::class, 'show'])->name('news.show');

    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/store', [NewsController::class, 'store'])->name('news.store');

    Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');

    Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');


    //rendez_vous
    Route::get('/rendez_vous', function () {
        return view('/ent/rendez_vous');
    })->name('ent.rendez_vous');
    Route::get('/fullcalendareventappointmentmaster',[FullCalendarEventAppointmentMasterController::class,'index']);

    Route::post('/fullcalendareventappointmentmaster/create',[FullCalendarEventAppointmentMasterController::class,'create']);

    Route::post('/fullcalendareventappointmentmaster/update',[FullCalendarEventAppointmentMasterController::class,'update']);

    Route::post('/fullcalendareventappointmentmaster/delete',[FullCalendarEventAppointmentMasterController::class,'destroy']);



    //fullcalender

    Route::get('/fullcalendareventmaster',[FullCalendarEventMasterController::class,'index']);

    Route::post('/fullcalendareventmaster/create',[FullCalendarEventMasterController::class,'create']);

    Route::post('/fullcalendareventmaster/update',[FullCalendarEventMasterController::class,'update']);

    Route::post('/fullcalendareventmaster/delete',[FullCalendarEventMasterController::class,'destroy']);




});
