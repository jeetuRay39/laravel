<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistrationController;


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
    return view('index'); 
});
Route::view('about','/about');
Route::view('contact','/contact');
Route::get("user",[UserController::class,'show']);
Route::get('/form',[RegistrationController::class,'form']);
Route::post('/register',[RegistrationController::class,'register']);
Route::get('/customer',[CustomerController::class,'index']);
Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customer.delete'); 
Route::get('/customer/edit/{id}',[CustomerController::class,'edit']);
Route::get('/customer/view',[CustomerController::class,'view']);
Route::post('/customer',[CustomerController::class,'store']); 
Route::post('customer/update/{id}',[CustomerController::class,'update']);

    

