<?php
// use App\Http\Controllers\Guest\PageController;

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;




Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/details/{id}', [PageController::class, 'detail'])->name('detail');
