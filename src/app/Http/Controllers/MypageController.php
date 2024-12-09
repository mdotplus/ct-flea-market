<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function buy()
    {
        return view('mypage.mypage');
    }

    public function edit()
    {
        return view('mypage.profile');
    }

    public function update(Request $request)
    {
        return redirect()->route('mypage');
    }
}
