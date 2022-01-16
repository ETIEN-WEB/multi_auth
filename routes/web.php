<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Annonceur\AnnonceurController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','HomeController@index')->name('index');

Auth::routes();

//route for polymoephysme


Route::get('/save_video_form',[HomeController::class,'save_video_form'])->name('get.form');
Route::post('/create_posts',[HomeController::class,'create_posts'])->name('post.posts');
Route::post('/create_video',[HomeController::class,'create_video'])->name('post.video');







