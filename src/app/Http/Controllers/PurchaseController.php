<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function buy($item_id)
    {
        return view('items.purchase', ['id' => $item_id]);
    }
}
