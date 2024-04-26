<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\User;
use http\Client\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index(): View
    {
        return view('index', [
            'groups' => Ads::all()->chunk(3)
        ]);
    }

    public function ad($city, $id): View
    {
        $ad = Ads::all()->find($id);
        return view('ads', [
            'ad' => $ad,
            'photo' => $ad->photo
        ]);
    }

    public function register(): View
    {
        return view('register');
    }

    public function personal(): View
    {
        $user = User::all()->find(Auth::id());
        return view('personal', [
            'groups' => $user->ads->chunk(3)
        ]);
    }
}
