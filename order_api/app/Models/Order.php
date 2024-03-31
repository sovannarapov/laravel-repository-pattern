<?php

namespace App\Models;

use App\Enums\Order\OrderFulFilledCode;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['client', 'details'];

    protected $casts = [
        'is_fulfilled' => OrderFulFilledCode::class,
    ];
}
