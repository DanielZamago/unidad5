<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReservationController;

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

Route::get('users/', [UserController::class,'index']);

Route::get('users/create', [UserController::class, 'create']);

Route::get('users/{id}', [UserController::class,'show']);

Route::post('users/', [UserController::class, 'store']);

Route::get('clients/', [ClientController::class, 'index']);

Route::get('clients/{id}', [ClientController::class, 'show']);

Route::get('reservations/', [ReservationController::class, 'index']);

Route::get('reservations/create', [ReservationController::class, 'create']);

Route::get('reservations/{id}', [ReservationController::class,'show']);


// Route::get('/hola', function () {
//     echo "HOLA";
// });

// Route::get('/saludo/{nombre}', function($nombre){
//     echo "Hola que tal ".$nombre;
// });

// Route::get('suma/{num1}/{num2}/{num3?}', function($num1,$num2,$num3=0){
//     echo "Suma: ".$num1+$num2+$num3;
// })->where(['num1'=>'[0-9]+','num2'=>'[0-9]+', 'num3'=>'[0-9]+']);

// Route::post('suma/', function(Request $request){

// });
