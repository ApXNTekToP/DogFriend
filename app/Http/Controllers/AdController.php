<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\AdsPhoto;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;

class AdController extends Controller
{

    public function create(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'address' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'price' => 'required|string',
            'images' => 'required',
            'images.*' => 'mimes:jpg,jpeg,png,gif,bmp',
        ]);

        $adsPhoto = [];

        $ads = Ads::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price
        ]);


        foreach ($request->file('images') as $el){
            $arr = [];
            $arr['ads_id'] = $ads->id;
            $arr['path'] = 'storage/' . $el->storePublicly('img', 'public');
            $adsPhoto[] = $arr;
        }

        AdsPhoto::insert($adsPhoto);

        User::where('id', Auth::user()->id)->update(['address' => $request->address]);

        return redirect()->route('personal')->with('message', 'Success');
    }
}
