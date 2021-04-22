<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\UsersModel;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
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
Route::get('/main', function () {
    return view('main');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

Route::post('form/register', [PostController::class, 'store'])->name('myform');
Route::post('form/login', [LoginController::class, 'store'])->name('mylogin');



Route::get('/{lang}','App\Http\Controllers\NinethController@index' );


Route::get('lang/{lang}', [NinethController::class, 'index']);





Route::get('email/sending', [MailController::class, 'send'])-> name("mymail");
