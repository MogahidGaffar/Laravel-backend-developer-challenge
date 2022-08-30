<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appointmentController;

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
   return redirect()->route('appointments.getAllpage');
});


Route::get('/appointments',[appointmentController::class,'getAllpage'])->name('appointments.getAllpage');
Route::get('/appointments/create',[appointmentController::class,'getCreatepage'])->name('appointments.getCreatepage');
Route::get('/appointments/edit/{appointmentId}',[appointmentController::class,'getEditpage'])->name('appointments.getEditpage');
Route::post('/appointments',[appointmentController::class,'createOne'])->name('appointments.createOne');
Route::post('/appointments/{appointmentId}',[appointmentController::class,'UpdateOne'])->name('appointments.UpdateOne');
Route::delete('/appointments/{appointmentId}',[appointmentController::class,'delete'])->name('appointments.RemoveOne');
