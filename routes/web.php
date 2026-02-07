<?php

use App\Http\Controllers\ControlerClass;
use App\Http\Controllers\HelloController;
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
// Route::get('/users',function(){
//     return view('index');
// })->name('users.get');
// Route::get('/users/{id}',function($id){
//     return 'Hello id '.$id;
// })->name('users.get');

// Route::get('/list',[HelloController::class,'index']);

Route::get('/one/{id}',function($id){
    return 'Hello page one'.$id;
});
Route::get('/students',function(){
    return view('sambathhttp');
});

//single controller function
// Route::get('/',[ControlerClass::class,'index']);

//muti function in controller
Route::controller(ControlerClass::class)->group(function(){
    Route::get('/show','/');
    Route::get('/show1','show');
    Route::get('/show/no','no');
});



Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/one',[ControlerClass::class,'index'])->name('one');
    Route::get('/two',function(){
        return 'Hello two';
    });
    Route::get('/three',function(){
        return 'Hello three';
    });
});
Route::prefix('client')->name('admin.')->group(function(){
    Route::get('/one',[ControlerClass::class,'index'])->name('one');
    Route::get('/two',function(){
        return 'Hello two';
    });
    Route::get('/three',function(){
        return 'Hello three';
    });
});
Route::prefix('customer')->name('admin.')->group(function(){
    Route::get('/one',[ControlerClass::class,'index'])->name('one');
    Route::get('/two',function(){
        return 'Hello two';
    });
    Route::get('/three',function(){
        return 'Hello three';
    });
});


Route::get('/',function(){
    return view('template.master');
});
Route::get('/child',function(){
    return view('child');
}
);
Route::get('/parent',function(){
    return view('parent');
})->name('parent.get');