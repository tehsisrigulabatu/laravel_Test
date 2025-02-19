<?php

use App\Http\Controllers\Court_TypeController;
use App\Http\Controllers\CourtController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/profile/{id}', function ($id) {
//     return ("halo ".$id);
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/service', function () {
//     return view('service');
// });

// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/rumah', function () {
//     return view('rumah');
// });
// Route::get('/projek', function () {
//     return view('projek');
// });
// Route::get('/servis', function () {
//     return view('servis');
// });

// Route::get('/admin', function() {
//     return view('master');
// });

// Route::get('/mproject', function () {
//     return view('mproject');
// });

Route::get('/court-type', [Court_TypeController::class, 'index']);
Route::post('/court-type', [Court_TypeController::class, 'store']);

Route::resource('court', CourtController::class);