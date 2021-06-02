<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function(){
    return view('auth.register');
});



Route::get('/home', function(){
    return view('dashboard.home');
});
Route::get('/document', function(){
    return view('documents.document');
});
Route::get('/mydocument', function(){
    return view('documents.mydocument');
});
Route::get('/categories', function(){
    return view('documents.categories');
});

Route::get('/profile', function(){
    return view('profile.profile');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.home');


