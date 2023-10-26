<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', [App\Http\Controllers\DashboardController::class, 'index']);
Route::get('/users', [App\Http\Controllers\DashboardController::class, 'users']);


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/layout', function () {
    return view('dashboard.index');
});

Route::get('/', function () {
    return view('home.index');
});

Route::get('/course', function () {
    return view('course.index');
});


Route::get('/login', function () {
    return view('auth.login');
});
