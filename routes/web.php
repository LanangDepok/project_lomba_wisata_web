<?php

use App\Http\Controllers\DestinationController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(DestinationController::class)->group(function () {
    Route::get('/', 'getDestinations');
    Route::get('/destination/create', 'createDestination');
    Route::get('/destination/{destination}', 'getDestination');
    Route::post('/destination/store', 'storeDestination');
    Route::get('/destination/{destination}/edit', 'editDestination');
    Route::put('/destination/update/{destination}', 'updateDestination');
    Route::delete('/destination/{destination}', 'deleteDestination');
});
