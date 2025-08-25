<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class logistics_details extends Model
{
    /** @use HasFactory<\Database\Factories\LogisticsDetailsFactory> */
    use HasFactory;
       protected $fillable = [
        'name',
        'type',
        'capacity',
        'origin',
        'destination',
        'status',
        'documents',
    ];

    protected $casts = [
        'documents' => 'array', // store documents as JSON
    ];
    public function requests()
{
    return $this->morphMany(ServiceRequest::class, 'requestable');
}

}
