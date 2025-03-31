<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);
Route::get('/gioi-thieu', [PageController::class, 'introduction']);
Route::get('/dien-dan', [PageController::class, 'forum']);
Route::get('/shop', [PageController::class, 'shop']);


Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);




