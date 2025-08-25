<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boilermaking_details extends Model
{
    /** @use HasFactory<\Database\Factories\BoilermakingDetailsFactory> */
    use HasFactory;
     protected $fillable = [
        'name',
        'type',
        'duration_days',
        'cost',
        'description',
        'materials',
        'status',
    ];

    protected $casts = [
        'materials' => 'array', // Automatically cast JSON to array
    ];

    /**
     * Optional: Relationship with Logistics if a project uses logistics
     */
    public function logistics()
    {
        return $this->hasMany(logistics_details::class);
    }
    public function requests()
{
    return $this->morphMany(ServiceRequest::class, 'requestable');
}

}
