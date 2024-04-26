<?php

use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\UserController;
use App\Models\Ads;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Controller::class, 'index'])->name('index');

Route::get('/{city}/ad_{id}', [Controller::class, 'ad'])->name('ad');

Route::get('/delete_ad/{id}', function ($id){
    Ads::all()->find($id)->delete();
    return redirect()->intended('personal');
})->middleware('auth')->name('delete_ad');

Route::get('/auth', function () {
    if(Auth::check()) {
        return redirect()->intended('personal');
    }else{
        return view('auth');
    }
})->name('auth');

Route::get('/register', [Controller::class, 'register'])->name('register');

Route::get('/personal', [Controller::class, 'personal'])->middleware('auth')->name('personal');

Route::get('/logout', [AuthenticateController::class, 'logout'])->middleware('auth')->name('logout');

Route::post('/login', [AuthenticateController::class, 'authenticate'])->name('login_post_form');

Route::post('/users/create', [UserController::class, 'create'])->name('create_user');

