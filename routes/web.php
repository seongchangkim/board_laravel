<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BoardController;
use App\Models\Board;
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

// 게시판 목록 get
Route::get('/', [BoardController::class, 'index']);

// 게시판 상세보기 get
Route::get('/show/{id}', [BoardController::class, 'show']);

// 게시판 만들기 get
Route::get('/create', [BoardController::class, 'createForm']);

// 게시판 만들기 post
Route::post('/create', [BoardController::class, 'create']);

// 게시판 수정 get
Route::get('/update/{id}', [BoardController::class, 'updateForm']);

// 게시판 삭제 get
Route::get('/delete/{id}', [BoardController::class, 'delete']);

// 게시판 수정 patch
Route::post('/update', [BoardController::class, 'update']);
