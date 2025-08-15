<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venture_items extends Model
{
    /** @use HasFactory<\Database\Factories\VentureItemsFactory> */
    use HasFactory;
        protected $fillable = ['venture_id', 'title', 'status'];

    public function venture()
    {
        return $this->belongsTo(Ventures::class);
    }

    public function propertyDetail()
    {
        return $this->hasOne(property_details::class);
    }

    public function logisticsDetail()
    {
        return $this->hasOne(property_details::class);
    }

    public function boilermakingDetail()
    {
        return $this->hasOne(boilermaking_details::class);
    }

    public function inquiries()
    {
        return $this->hasMany(inquiries::class);
    }
}
