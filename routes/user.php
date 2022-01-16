<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;


Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          
    Route::post('/create',[UserController::class,'create'])->name('create');
    Route::post('/check',[UserController::class,'check'])->name('check');
});

Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
    Route::get('/home',[UserController::class,'home'])->name('home');
    Route::post('/logout',[UserController::class,'logout'])->name('logout');
  //   Route::post('/logout',[UserController::class,'logout'])->name('logout');
  //   Route::get('/add-new',[UserController::class,'add'])->name('add');
});


 