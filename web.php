<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\BusController;

use App\Models\Bus;
Route::get('/', function () {
    return view('welcome');
});
Route::view("loginSignup","loginSignup");
Route::post('login', [UserController::class, 'login']);
Route::post('signup', [UserController::class, 'signup']);


Route::view("home","home");

Route::get('profile', [UserController::class, 'profile']);
Route::post('editprofile', [UserController::class, 'editprofile']);


Route::get('air', [UserController::class, 'air']);
Route::get('train', [UserController::class, 'train']);
Route::get('bus', [UserController::class, 'bus']);
// Route::get('/availableseats', [UserController::class, 'availableseats']);
Route::get('bussearch', [UserController::class, 'bussearch']);
Route::get('confirmticket', [UserController::class, 'confirmticket']);
Route::get('payment', [UserController::class, 'payment']);



// Route::get('confirmticket', [UserController::class, 'confirmticket']);




Route::get('/searchBuses', 'Bus_Controller@searchBuses')->name('searchBuses');
// Route::post('/searchBuses', [BusController::class, 'searchBuses'])->name('searchBuses');




Route::post('/searchBuses', [BusController::class, 'searchBuses'])->name('searchBuses');



Route::get('logout', [UserController::class, 'logout']);
Route::view("live","live");


Route::post('/searchBuses', function(){
    $Bus = new Bus();
    $Bus->From = request('From');
    $Bus->To = request('To');
    $Bus->Journey_Date = request('Journey_Date');
    $Bus->Return_Date = request('Return_Date');
    $Bus->save();
 return redirect('/bussearch');   
});
