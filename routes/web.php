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

#Route::get('hello', 'App\Http\Controllers\HelloController@index')->middleware('auth')->name('');
#Route::post('hello', 'App\Http\Controllers\HelloController@post')->name('');

Route::get('public/login', 'App\Http\Controllers\LoginContoroller@showLoginForm')->name('login');
Route::post('public/login', 'App\Http\Controllers\LoginContoroller@login')->name('login');
Route::get('public/register', 'App\Http\Controllers\RegisterContoroller@showRegisterForm')->name('register');
Route::post('public/register', 'App\Http\Controllers\RegisterContoroller@register')->name('register');
Route::get('public/deldb', 'App\Http\Controllers\DelDBController@showDelDBForm')->name('deldb');
Route::post('public/deldb', 'App\Http\Controllers\DelDBController@delDB')->name('deldb');
Route::get('public/logout', 'App\Http\Controllers\LogoutController@logout')->name('logout');

Route::get('public/subject', 'App\Http\Controllers\SubjectController@showSubjectPage')->name('subject');
Route::get('public/mathgrade', 'App\Http\Controllers\SubjectController@showMathGradePage')->name('mathgrade');
Route::get('public/math1st', 'App\Http\Controllers\SubjectController@showMath1stGradePage')->name('math1st');
Route::get('public/math2nd', 'App\Http\Controllers\SubjectController@showMath2ndGradePage')->name('math2nd');
Route::get('public/math3rd', 'App\Http\Controllers\SubjectController@showMath3rdGradePage')->name('math3rd');
Route::get('public/mathprob', 'App\Http\Controllers\QuestionController@showProblem')->name('mathprob');
Route::post('public/mathprob', 'App\Http\Controllers\QuestionController@gradeProblem')->name('mathprob');

