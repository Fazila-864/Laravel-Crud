<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Prodcontroller;


Route::get('/', function () {
    return view('master.layout');
});
Route::resource('product' ,ProdController::class);