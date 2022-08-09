<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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
    return view('register');
});

Route::post("/register",[AppController::class, 'register']);
Route::get("/login",function(){
    return view('login');
});
Route::post("/login",[AppController::class, 'login']);
Route::get("/dashboard",[AppController::class,'userLogin']);
Route::get("/logout",[AppController::class,'userLogout']);
Route::get("/agenda",function(){
    return view('agenda');
});

Route::post('/add-event',[AppController::class,'addEvent']);
Route::get('delete/{id}',[AppController::class,'deleteEvent']);
Route::get('edit/{id}',[AppController::class,'editEvent']);
Route::get('view/{id}',[AppController::class,'viewEvent']);
Route::post('update-event',[AppController::class,'updateEvent']);