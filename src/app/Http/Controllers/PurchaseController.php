<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function buy($item_id)
    {
        return view('items.purchase', ['id' => $item_id]);
    }

    public function change()
    {
        return view('items.address');
    }

    public function update($item_id)
    {
        return redirect()->route('items.purchase', ['item_id' => $item_id]);
    }
}
