<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Annonceur\AnnonceurController;


Route::middleware(['guest:annonceur'])->group(function(){
    Route::view('/login','annonceur.modal.annonceur_login')->name('annonceur_login');
    
    Route::post('/create',[AnnonceurController::class,'create'])->name('create');
    Route::post('/check',[AnnonceurController::class,'check'])->name('check');
    /* start mot de passe oublié */
    Route::get('/forget_password',[AnnonceurController::class,'forget_password'])->name('get_forget_password');
    Route::post('/forget_password',[AnnonceurController::class,'postForget_password'])->name('post_forget_password');
    Route::get('/getResetPassword/{reset_code}',[AnnonceurController::class,'getResetPassword'])->name('getResetPassword');
    Route::post('/postResetPassword/{reset_code}',[AnnonceurController::class,'postResetPassword'])->name('postResetPassword');
/* end mot de passe oublié */ 
});

Route::middleware(['auth:annonceur'])->group(function(){
    Route::get('/home','AnnonceurController@home')->name('home');
    Route::post('/logout',[AnnonceurController::class,'logout'])->name('logout');

});


 