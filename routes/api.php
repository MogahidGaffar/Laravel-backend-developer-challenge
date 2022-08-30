<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appointmentController;
use App\Http\Controllers\API\JWTAuthController;

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


Route::post('register', [JWTAuthController::class, 'register']);
Route::post('login', [JWTAuthController::class, 'login']);
 
Route::group(['middleware' => 'auth.jwt'], function () {

    Route::post('logout', [JWTAuthController::class, 'logout']);
 
});


Route::get('/appointments',[appointmentController::class,'ApigetAll'])->name('Apiappointments.getAll');
Route::get('/appointments/{appointmentId}',[appointmentController::class,'ApigetOne'])->name('Apiappointments.getOne');
Route::post('/appointments',[appointmentController::class,'ApicreateOne'])->name('Apiappointments.createOne');
Route::post('/appointments/{appointmentId}',[appointmentController::class,'ApiUpdateOne'])->name('Apiappointments.UpdateOne');
Route::delete('/appointments/{appointmentId}',[appointmentController::class,'Apidelete'])->name('Apiappointments.RemoveOne');