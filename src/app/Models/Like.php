<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    public function getLikesByUser()
    {
        $likes = Like::all()->groupBy('user_id')->map(function ($group) {
            return $group->pluck('item_id');
        })->toArray();
        return $likes;
    }
}
