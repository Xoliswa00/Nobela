<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_requests extends Model
{
    /** @use HasFactory<\Database\Factories\ServiceRequestsFactory> */
    use HasFactory;
     protected $fillable = [
        'requester_name', 'requester_email', 'requester_phone', 'message', 'status'
    ];

    public function requestable()
    {
        return $this->morphTo();
    }
}
