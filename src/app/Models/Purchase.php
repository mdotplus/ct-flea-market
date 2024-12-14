<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    public function isPurchased($itemId)
    {
        return $this->where('item_id', $itemId)->exists();
    }
}
