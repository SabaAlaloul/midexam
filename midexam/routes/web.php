<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

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

Route::get('/',[ProductController::class,'index'] );




Route::get('/products/create', [ProductController::class, 'create']);



         Route::post('/products/store',[ProductController::class,'store']);


Route::get('/products/edit/{id}', [ProductController::class, 'edit']);

Route::put('/products/update/{id}', [ProductController::class, 'update']);

Route::delete('/products/delete/{id}',[ProductController::class, 'destroy']);
