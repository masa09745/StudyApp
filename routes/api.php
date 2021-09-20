<?php

use App\Http\Controllers\QuestionController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::group(['Middleware' => ['api']], function(){
  Route::resource('subjects', 'SubjectController');
  Route::resource('questions', 'QuestionController');
  
  Route::get('/subjects/{subjectId}/questions', [QuestionController::class, 'GetQuestionsBySubject']);
  Route::post('/questions/upload', [QuestionController::class, 'ImportQuestionsData']);

});

