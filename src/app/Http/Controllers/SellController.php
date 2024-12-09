<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellController extends Controller
{
    public function edit()
    {
        return view('items.sell');
    }

    public function create()
    {
        return view('items.index');
    }
}
