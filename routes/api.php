<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/exams', [ExamController::class, 'index']);
Route::post('/exams', 'ExamController@create');
Route::get('/exams/{exam}', 'ExamController@show');
Route::put('/exams/{exam}', 'ExamController@update');
Route::delete('/exams/{exam}', 'ExamController@destroy');
