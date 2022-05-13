<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\IspitController;
use App\Http\Controllers\PrijavaController;
use App\Http\Controllers\API\AuthController;
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
Route::group(['middleware' => ['auth:sanctum']], function () {
Route::resource('student',StudentController::class);
Route::resource('ispit',IspitController::class);
Route::resource('prijava',PrijavaController::class);
Route::post('/logout', [AuthController::class, 'logout']);
});
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function (Request $request) {
        return auth()->user();
    });

   // Route::resource('ispit',IspitController::class)->only(['update','store','destroy']);
    Route::resource('student',StudentController::class);
   // Route::resource('prijava',PrijavaController::class)->only(['update','store','destroy']);

    //Route::post('/logout', [AuthController::class, 'logout']);
});
*/