<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Hall;


Route::get('/', function () {
    return view('client.index');
});

Auth::routes();

Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('admin', function () {    
    if (Auth::check()) {
        $halls = Hall::all();
        return view('admin.index', compact('halls'));
    }
})->middleware('auth');
