<?php

use Illuminate\Support\Facades\Route;
//add controller for Laravel 8
use App\Http\Controllers\PagesController;
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
Route::get('/services', [PagesController::class, 'services']);

Route::get('/about', function(){
    return view('pages.about');
});