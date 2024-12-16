<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/Post', [PostController::class, 'index']);
Route::get('/Post/Create', [PostController::class, 'create']);
Route::get('Post/{Post}', [PostController::class, 'show']);
