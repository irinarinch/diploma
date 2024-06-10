<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HallController;



Route::get('login', function () {
    return view('admin.login');
})->name('login');  


Route::get('/', function () {
    return view('client.index');
});

Auth::routes();

Route::get('/admin', function () {
    if (Auth::check()) {
        return view('admin.index');
    }
})->middleware('auth');




