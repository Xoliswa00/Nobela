<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propert_img extends Model
{
    /** @use HasFactory<\Database\Factories\PropertImgFactory> */
    use HasFactory;
        protected $fillable = ['property_details_id', 'image_path'];

 public function images()
{
    return $this->hasMany(propert_img::class, 'property_details_id');
}

}
