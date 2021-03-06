<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReserveController;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;

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
Route::get('/index.html', [PostController::class, 'index']);

Route::get('/kokunai_hotel', [PostController::class, 'kokunai_hotel']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//予約登録ページ表示
Route::get('/reserves/edit', [ReserveController::class, 'show'])->name('reserve.show');
Route::post('/reserves/edit', [ReserveController::class, 'post'])->name('reserve.post');
//予約確認画面表示
Route::get('/reserves/confirm', [ReserveController::class, 'confirm'])->name('reserve.confirm');
//メール送信
Route::post('/reserves/confirm', [ReserveController::class, 'send'])->name('reserve.send');
//予約完了画面表示
Route::get('/reserves/done', [ReserveController::class, 'done'])->name('reserve.done');

// メール認証用アドレス入力画面
Route::get('/register/vertify', function () {
    return view('auth.mailVertify');
})->name('register.vertify');
// メール認証用メール送信実行
Route::post('/register/pre_register', [App\Http\Controllers\Auth\RegisterController::class, 'preRegister'])
->name('register.pre_register');
// メール認証用メール送信完了画面
Route::get('/register/mail_send', function () {
    return view('auth.mailSend');
})->name('register.mail_send');

Route::middleware('registerSigned')->group(function () {
    // 会員登録画面
    Route::get('/register/form', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])
    ->name('register.form');
    // 会員登録確認画面
    Route::post('/register/confirm', [App\Http\Controllers\Auth\RegisterController::class, 'registerConfirm'])
    ->name('register.confirm');
    // 会員登録実行
    Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])
    ->name('register');
});

// ユーザIDチェック処理実行
Route::get('/register/user_id_check', [App\Http\Controllers\Auth\RegisterController::class, 'userIdCheck'])
    ->name('register.user_id_check');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/myjtb', function () {
        return view('welcome');
    })
    ->name('myjtb');
});
