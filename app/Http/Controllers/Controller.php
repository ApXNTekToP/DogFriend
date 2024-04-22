<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
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

    public function personal(): View
    {
        return view('personal');
    }
}
