<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Services\ItemService;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $itemsWithPurchaseStatus = itemService::getItemsWithPurchaseStatus();
        $likes = Like::getLikesByUsers();

        return view('items.index', [
            'items' => $itemsWithPurchaseStatus,
            'likes' => $likes,
        ]);
    }

    public function detail($item_id)
    {
        return view('items.detail', ['id' => $item_id]);
    }
}
