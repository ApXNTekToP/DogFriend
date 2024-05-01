<?php

use App\Http\Controllers\AdController;
use App\Http\Controllers\AuthenticateController;
use App\Http\Controllers\UserController;
use App\Models\Ads;
use App\Models\User;
use App\Models\UserAd;
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
Route::get('/ads/create', [Controller::class, 'create_ad_view'])->name('create_ad_view');
Route::get('/{city}/ad_{id}', [Controller::class, 'ad'])->name('ad');
Route::get('/favorite', [Controller::class, 'favorite'])->middleware('auth')->name('favorite');
Route::get('/add_ad_favorite/{id}', function ($id){
    $ad = Ads::all()->find($id);
    if($ad){
        UserAd::create([
            'user_id' => Auth::user()->id,
            'ads_id' =>  $ad->id
        ]);
    }
    return redirect()->back();
})->middleware('auth')->name('add_ad_favorite');
Route::get('/delete_ad/{id}', function ($id){
    $ads = Ads::all()->find($id);

    if(Auth::user()->id === $ads->user_id){
        Ads::all()->find($id)->delete();
    }

    return redirect()->intended('personal');
})->middleware('auth')->name('delete_ad');
Route::get('/delete_ad_from_favorite/{id}', function ($id){
    UserAd::where('ads_id', '=', $id)->where('user_id', '=', Auth::user()->id)->first()->delete();
    return redirect()->intended('favorite');
})->middleware('auth')->name('delete_ad_from_favorite');
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
Route::post('/ads/create', [AdController::class, 'create'])->middleware('auth')->name('create_ad');

