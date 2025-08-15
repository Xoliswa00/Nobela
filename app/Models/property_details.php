<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property_details extends Model
{
    /** @use HasFactory<\Database\Factories\PropertyDetailsFactory> */
    use HasFactory;
       protected $fillable = [
        'venture_item_id',
        'house_size',
        'yard_size',
        'bedrooms',
        'bathrooms',
        'price',
        'address',
        'bank_approval_status'
    ];

    public function ventureItem()
    {
        return $this->belongsTo(venture_items::class);
    }
}
