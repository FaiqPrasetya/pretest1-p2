<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// default route
Route::get('/', function () {
    return view('welcome');
});

// view route
Route::view('/home', 'viewName');

// redirect route
Route::redirect('/lama', '/baru', 301);

// parameter route
Route::get('/user/{id}', function ($id) {
    return 'User ID: ' . $id;
});

// optional parameter route
Route::get('/user/{id?}', function ($id = null) {
    return 'User ID: ' . $id;
});

// route with required parameter and controller Laravel 8
Route::get('/user/{id}', [UserController::class, 'show']);
