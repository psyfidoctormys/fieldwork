<?php

use Illuminate\Support\Facades\Route;
//add controller for Laravel 8
use App\Http\Controllers\PagesController;
//use App\Http\Controllers\PostsController;
use App\Http\Controllers\LvController;

use App\Http\Controllers\RedCapController;
use App\Http\Controllers\TransController;

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
/* OOB Welcome route
Route::get('/', function () {
    return view('welcome');
});
*/

//Routing to controller @ function
Route::get('/', [PagesController::class, 'index']);
//Other routes
Route::get('/about', [PagesController::class, 'about']);
//Route::get('/service', [PagesController::class, 'service']);

/*Route::get('/about', function(){
    return view('pages.about');
});

Route::get('/service', function(){
    return view('pages.service');
});

Route::get('/lvtableview', function(){
    return view('pages.lvtableview');
});*/
//tutorial controller
//Route::resource('/posts', PostsController::class);
//OG LV Controller
Route::resource('/lv', LvController::class);
//OG RedCap Controller
Route::get('/redcap', [RedCapController::class, 'callMyAPI2']);
//Combined controller
Route::get('/combo', [RedCapController::class, 'callMyAPI']);


//upload file controllers
Route::get('/trans', [TransController::class, 'index']);
Route::post('/trans/uploadFile', [TransController::class, 'uploadFile']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
