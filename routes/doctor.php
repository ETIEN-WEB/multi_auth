<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\DoctorController;


Route::middleware(['guest:doctor'])->group(function(){
    Route::view('/login','doctor.modal.doctor_login')->name('login');
    Route::view('/register','doctor.modal.doctor_register')->name('register');
    Route::post('/create',[DoctorController::class,'create'])->name('create');
    Route::post('/check',[DoctorController::class,'check'])->name('check');
/* start mot de passe oublié */
    Route::get('/forget_password',[DoctorController::class,'forget_password'])->name('get_forget_password');
    Route::post('/forget_password',[DoctorController::class,'postForget_password'])->name('post_forget_password');
    Route::get('/getResetPassword/{reset_code}',[DoctorController::class,'getResetPassword'])->name('getResetPassword');
    Route::post('/postResetPassword/{reset_code}',[DoctorController::class,'postResetPassword'])->name('postResetPassword');
/* end mot de passe oublié */   
});  

Route::middleware(['auth:doctor'])->group(function(){
    Route::get('/home','DoctorController@home')->name('home');
    Route::post('/logout',[DoctorController::class,'logout'])->name('logout');
    
});


