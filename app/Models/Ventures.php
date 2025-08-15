<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventures extends Model
{
    /** @use HasFactory<\Database\Factories\VenturesFactory> */
    use HasFactory;
     protected $fillable = ['name', 'description'];

    public function ventureItems()
    {
        return $this->hasMany(venture_items::class);
    }
}
