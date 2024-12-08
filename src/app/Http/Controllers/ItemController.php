<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view('items.index');
    }

    public function detail($item_id)
    {
        return view('items.detail', ['id' => $item_id]);
    }
}
