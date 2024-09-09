<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestsController;

Route::get('/', function () {return view('test');});
Route::get('/test', [TsetsController::class,'test']);
