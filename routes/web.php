<?php

use App\Http\Controllers\HourNafiVissalController;
use Illuminate\Support\Facades\Route;

/*
|------------------------------HO--------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/nafi',[HourNafiVissalController::class,'index']);
Route::get('/nafi1',[HourNafiVissalController::class,'data']);

Route::prefix('admin')->group(function(){
    Route::get('/hello',function(){
        return 'Hello adim';
    });
});
Route::prefix('user')->group(function(){
    Route::get('/hello',function(){
        return 'Hello user';
    });
});
Route::prefix('customer')->group(function(){
    Route::get('/hello',function(){
        return 'Hello ';
    });
});
Route::prefix('api')->group(function(){
    Route::get('/hello',function(){
        return 'Hello api';
    });
});

