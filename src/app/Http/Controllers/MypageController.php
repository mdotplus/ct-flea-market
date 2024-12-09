<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function buy()
    {
        return view('mypage.mypage');
    }

    public function edit($user_id)
    {
        return view('mypage.profile');
    }
}
