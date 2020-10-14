<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmotionController;

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

Route::get('/hoge', function () {
    return view('well-being.home', );
});

// 感情詳細ページ
Route::get('emotion/get/{id}', 'App\Http\Controllers\EmotionController@show');

// 感情入力ページ
Route::get('emotion/create', 'App\Http\Controllers\EmotionController@create');

//// 感情入力確認ページ
Route::post('emotion/create/confirm', 'App\Http\Controllers\EmotionController@createConfirm');

// 感情の登録
Route::post('emotion', 'App\Http\Controllers\EmotionController@store');

Route::get('test', function () {
    return view('well-being.list');
});
