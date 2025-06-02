<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'wallet_id',
        'category_id',
        'category_children_id',
        'amount',
        'note',
        'date'
    ];
}
