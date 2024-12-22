<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Services\ItemService;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {
        $tab = $request->query('tab', 'recommend');

        $itemsWithPurchaseStatus = ItemService::getItemsWithPurchaseStatus();
        $likes = Like::getLikesByUser();

        return view('items.index', [
            'tab' => $tab,
            'items' => $itemsWithPurchaseStatus,
            'likes' => $likes,
        ]);
    }

    public function detail($item_id)
    {
        return view('items.detail', ['id' => $item_id]);
    }
}
