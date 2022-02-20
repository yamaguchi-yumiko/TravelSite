<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReserveController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//予約ページ

Route::get('/reserves/edit', [ReserveController::class, 'show'])->name('reserve.show'); //予約登録ページ表示
Route::post('/reserves/edit', [ReserveController::class, 'post'])->name('reserve.post'); //予約登録バリテーション
Route::get('/reserves/confirm', [ReserveController::class, 'confirm'])->name('reserve.confirm'); //予約確認画面表示
Route::post('/reserves/confirm', [ReserveController::class, 'send'])->name('reserve.send'); //メール送信
Route::get('/reserves/done', [ReserveController::class, 'done'])->name('reserve.done');//予約完了画面表示
