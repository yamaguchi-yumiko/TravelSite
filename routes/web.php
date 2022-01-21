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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// メール認証用アドレス入力画面
Route::get('/register/vertify', function () {
    return view('auth.mailVertify');
})->name('register.vertify');
// メール認証用メール送信実行
Route::post('/register/pre_register', [App\Http\Controllers\Auth\RegisterController::class, 'preRegister'])
->name('register.pre_register');
// メール認証用メール送信完了画面
Route::post('/register/mail_send', function () {
    return view('auth.mailSend');
})->name('register.mail_send');
