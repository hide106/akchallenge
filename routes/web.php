<?php

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

#Route::get('hello', 'App\Http\Controllers\HelloController@index')->middleware('auth');
#Route::post('hello', 'App\Http\Controllers\HelloController@post');

Route::get('login', 'App\Http\Controllers\LoginContoroller@showLoginForm');
Route::post('login', 'App\Http\Controllers\LoginContoroller@login');
Route::get('register', 'App\Http\Controllers\RegisterContoroller@showRegisterForm');
Route::post('register', 'App\Http\Controllers\RegisterContoroller@register');
Route::get('deldb', 'App\Http\Controllers\DelDBController@showDelDBForm');
Route::post('deldb', 'App\Http\Controllers\DelDBController@delDB');
Route::get('logout', 'App\Http\Controllers\LogoutController@logout');

Route::get('subject', 'App\Http\Controllers\SubjectController@showSubjectPage');
Route::get('mathgrade', 'App\Http\Controllers\SubjectController@showMathGradePage');
Route::get('math1st', 'App\Http\Controllers\SubjectController@showMath1stGradePage');
Route::get('math2nd', 'App\Http\Controllers\SubjectController@showMath2ndGradePage');
Route::get('math3rd', 'App\Http\Controllers\SubjectController@showMath3rdGradePage');
Route::get('mathprob', 'App\Http\Controllers\QuestionController@showProblem');
Route::post('mathprob', 'App\Http\Controllers\QuestionController@gradeProblem');

