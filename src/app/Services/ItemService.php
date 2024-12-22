<?php

namespace App\Services;

use App\Models\Item;
use App\Models\Purchase;

class ItemService
{
    public function getItemsWithPurchaseStatus()
    {
        $items = Item::all();
        $purchases = Purchase::all();

        $itemsWithPurchaseStatus = [];
        foreach ($items as $item) {
            $itemsWithPurchaseStatus[] = [
                'item' => $item,
                'is_purchased' => $purchases->contains('item_id', $item->id),
            ];
        }

        return $itemsWithPurchaseStatus;
    }
}

