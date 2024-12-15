<?php

namespace App\Http\Controllers;

use App\Services\ItemService;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $itemsWithPurchaseStatus = (new ItemService())->getItemsWithPurchaseStatus();
        return view('items.index', ['items' => $itemsWithPurchaseStatus]);
    }

    public function detail($item_id)
    {
        return view('items.detail', ['id' => $item_id]);
    }
}
