<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\AdsPhoto;
use App\Models\User;
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

    public function ads($id): View
    {
        return view('ads.ads_content');
    }
}
