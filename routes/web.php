<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/course', [PagesController::class, 'course']);
Route::get('/course-list', [PagesController::class, 'course_list']);
Route::get('/classes', [PagesController::class, 'classes']);
Route::get('/404', [PagesController::class, 'error_page']);
