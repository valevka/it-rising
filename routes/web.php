<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
Route::get('/', [Controllers\BaseController::class, 'getIndex']);
Route::get('/choose_lang', [Controllers\BaseController::class, 'getChoose_lang']);
Route::get('/html', [Controllers\BaseController::class, 'getHtml']);
Route::get('/c', [Controllers\BaseController::class, 'getC']);
Route::get('/c_sharp', [Controllers\BaseController::class, 'getC_sharp']);
Route::get('/js', [Controllers\BaseController::class, 'getJs']);
Route::get('/php', [Controllers\BaseController::class, 'getPhp']);
Route::get('/python', [Controllers\BaseController::class, 'getPython']);
Route::get('/login', [Controllers\BaseController::class, 'getLogin']);
Route::get('/register', [Controllers\BaseController::class, 'getRegister']);






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
