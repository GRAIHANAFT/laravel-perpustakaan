<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentGroupController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
});



Route::resource('students', StudentController::class)->middleware('auth');
Route::resource('studentGroups', StudentGroupController::class)->middleware('auth');
Route::resource('rayons', RayonController::class)->middleware('auth');
Route::resource('publishers', PublisherController::class)->middleware('auth');
Route::resource('books', BookController::class)->middleware('auth');
Route::resource('borrowings', BorrowingController::class)->middleware('auth');
Route::resource('registers', RegisterController::class)->middleware('guest');
Route::resource('logins', loginController::class);
Route::post('/logout', [LoginController::class, 'logout']);

