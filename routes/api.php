<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appointmentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/appointments',[appointmentController::class,'getAll'])->name('appointments.getAllpage');
Route::get('/appointments/create',[appointmentController::class,'getCreatepage'])->name('appointments.getCreatepage');
Route::get('/appointments/edit/{userId}',[appointmentController::class,'getEditpage'])->name('appointments.getEditpage');
Route::post('/appointments',[appointmentController::class,'createOne'])->name('appointments.createOne');
Route::post('/appointments/{userId}',[appointmentController::class,'UpdateOne'])->name('appointments.UpdateOne');
Route::delete('/appointments/{userId}',[appointmentController::class,'RemoveOne'])->name('appointments.RemoveOne');