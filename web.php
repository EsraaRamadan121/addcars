<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddCarController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    return "welcom my route";
});

Route::get('user/{name}/{age?}', function ($name , $age=0) {
    if($age==0){
         return "welcom my name : ". $name ;
    }else{
            return "welcom my name : ". $name . " and age is: " . $age ;

    }
})->whereIn('name',['esraa','hager','manar']);

Route::prefix('myfamily')->group(function(){
    Route::get('/', function () {
    return 'myfamily';
});
Route::get('dad', function () {
    return 'baba';
});
Route::get('mom', function () {
    return 'mama';
});
Route::get('borther', function () {
    return 'mahmoud';
});
Route::get('sister', function () {
    return 'mona';
});
});
Route::get('cv', function () {
    return view('cv');
});

Route::get('login', function () {
    return view('login');
});
Route::post('receive', function () {
    return 'data receive';
})->name('receive');

Route::get('test1',[LoginController::class,'test1']);

Route::get('addCar', function () {
    return view('addCar');
});
Route::get('test2',[AddCarController::class,'test2']);