<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BorrowedHistory extends Model
{
    protected $fillable = [
        'user_id',
        'item_id',
        'quantity',
        'expected_return_date',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function item()
    {
        return $this->belongsTo(ItemManagement::class, 'item_id');
    }
}
