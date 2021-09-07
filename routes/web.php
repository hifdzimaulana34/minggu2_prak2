<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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


Route:: get('/',[PageController::class,'indexLaravel']);

Route:: get('/about',[PageController::class,'AboutUser']);

Route:: get('/article/{id}',[PageController::class,'Article']);
Route:: get('/',[HomeController::class,'indexLaravel']);
Route:: get('/about',[AboutController::class,'AboutUser']);
Route:: get('/article/{id}',[ArticleController::class,'Article']); 
